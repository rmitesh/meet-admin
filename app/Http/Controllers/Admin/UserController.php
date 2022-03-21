<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use App\Models\User;
use DataTables;

class UserController extends Controller
{
    public function index( Request $request ) {
        if ( $request->ajax() ) {
            $permissions = User::whereHas('roles', function( $query ) {
                return $query->whereNotIn('name', get_ignore_roles());
            })->select(array(
                'id', 'first_name', 'last_name', 'email', 'created_at'
            ))->latest()->get();
            return DataTables::of($permissions)
                    ->addIndexColumn()
                    ->addColumn('name', function( $row ) {
                        return $row->fullName;
                    })
                    ->addColumn('email', function( $row ) {
                        return '
                            <a href="mailto:'. $row->email .'">'. $row->email .'</a>
                        ';
                    })
                    ->addColumn('created_at', function( $row ) {
                        return date('dS F, Y h:ia', strtotime($row->created_at));
                    })
                    ->addColumn('action', function( $row ) {
                        $btn = '
                            <a href="'. route('admin.user.edit', $row->id) .'" class="btn btn-outline-info btn-sm mr-1" title="Edit User">
                                <i class="fas fa-edit"></i>
                            </a>
                        ';
                        $btn .= '
                            <a href="javascript: void(0);" data-xid="'.$row->id.'" class="delete-user btn btn-outline-danger btn-sm" title="Delete User">
                                <i class="fas fa-trash"></i>
                            </a>
                        ';
                       return $btn;
                    })
                    ->rawColumns(['name', 'email', 'created_at', 'action'])
                    ->make(true);
        }

        $this->data = array(
            'title' => 'User | ',
            'breadcrumbs' => array(
                'title' => 'User',
                'breadcrumb' => array(
                    'admin.dashboard' => 'Dashboard',
                    '#' => 'User',
                ),
            ),
        );

        return view('admin.user.index', $this->data);
    }

    public function create() {
        $this->data = array(
            'title' => 'Create User | ',
            'breadcrumbs' => array(
                'title' => 'User',
                'breadcrumb' => array(
                    'admin.dashboard' => 'Dashboard',
                    'admin.user.index' => 'User',
                    '' => 'Create',
                ),
            ),
        );

        $roles = Role::select(array(
            'id', 'name',
        ))->whereNotIn('name', get_ignore_roles())->oldest()->get();
        $this->data['roles'] = $roles;

        return view('admin.user.create', $this->data);
    }

    public function store( Request $request ) {
        $validatedData = $request->validate(array(
            'first_name' => array('required', 'string'),
            'last_name' => array('required', 'string'),
            'email' => array('required', 'email', 'unique:users,email'),
            'role' => array('required', 'numeric'),
        ));

        $password = random_password();
        $user = User::create(array(
            'first_name' => $validatedData['first_name'],
            'last_name' => $validatedData['last_name'],
            'email' => $validatedData['email'],
            'password' => bcrypt($password),
        ));

        if ($user) {
            // $user->sendEmailVerificationNotification();
            $user->assignRole(Role::find($validatedData['role']));
            if (isset($request->save_and_new)) {
                return redirect()->back()->withStatus('New user has been created.');
            }
            return redirect()->route('admin.user.index')->withStatus('New user has been created. password => ' . $password);
        }
        return redirect()->back()->withErrors('Something went wrong while create user')->withInput();
    }

    public function edit( $id ) {
        $user = validateUserRole( $id );

        if ($user) {
            $this->data = array(
                'title' => 'Edit User | ',
                'breadcrumbs' => array(
                    'title' => 'User',
                    'breadcrumb' => array(
                        'admin.dashboard' => 'Dashboard',
                        'admin.user.index' => 'User',
                        '' => 'Edit',
                    ),
                ),
            );

            $roles = Role::select(array(
                'id', 'name',
            ))->whereNotIn('name', get_ignore_roles())->oldest()->get();
            $this->data['roles'] = $roles;

            $this->data['user_roles'] = $user->roles ? $user->roles->pluck('id')->toArray() : array();
            $this->data['user'] = $user;


            return view('admin.user.edit', $this->data);
        } else {
            return redirect()->back()->withErrors('Something went wrong, User is not found.');
        }
    }

    public function update( Request $request, $id ) {
        $user = validateUserRole( $id );

        $validatedData = $request->validate(array(
            'first_name' => array('required', 'string'),
            'last_name' => array('required', 'string'),
            'role' => array('required', 'numeric'),
        ));

        $update_result = $user->update(array(
            'first_name' => $validatedData['first_name'],
            'last_name' => $validatedData['last_name'],
        ));

        if ( $update_result ) {
            // $user->sendEmailVerificationNotification();
            User::find($id)->assignRole(Role::find($validatedData['role']));
            return redirect()->route('admin.user.index')->withStatus('User has been updated.');
        }
        return redirect()->back()->withErrors('Something went wrong while update user')->withInput();
    }

    public function destroy( Request $request, $id ) {
        $user = validateUserRole( $id );

        if ( $user ) {
            if ( $user->delete() ) {
                $this->data = array(
                    'status' => true,
                    'message' => 'User has been deleted.',
                );
            } else {
                $this->data = array(
                    'status' => false,
                    'message' => 'Something went wrong while delete the user.',
                );
            }
        } else {
            $this->data = array(
                'status' => false,
                'message' => 'Someting went wrong, User not found.',
            );
        }
        return response()->json($this->data);
    }
}
