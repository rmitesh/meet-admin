<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use DataTables;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class RoleController extends Controller
{
    public function index( Request $request ) {

        if ( $request->ajax() ) {
            $roles = Role::where('name', '!=', User::SUPER_ADMIN)->latest()->get();
            return DataTables::of($roles)
                    ->addIndexColumn()
                    ->addColumn('name', function( $row ) {
                        return $row->name;
                    })
                    ->addColumn('created_at', function( $row ) {
                        return date('dS F, Y h:ia', strtotime($row->created_at));
                    })
                    ->addColumn('action', function( $row ) {
                        $btn = '
                            <a href="'. route('admin.role.edit', $row->id) .'" class="btn btn-outline-info btn-sm mr-1" title="Edit Role">
                                <i class="fas fa-edit"></i>
                            </a>
                        ';
                        $btn .= '
                            <a href="javascript: void(0);" data-xid="'.$row->id.'" class="delete-role btn btn-outline-danger btn-sm" title="Delete Role">
                                <i class="fas fa-trash"></i>
                            </a>
                        ';
                       return $btn;
                    })
                    ->rawColumns(['name', 'created_at', 'action'])
                    ->make(true);
        }

        $this->data = array(
            'title' => 'Role | ',
            'breadcrumbs' => array(
                'title' => 'Role',
                'breadcrumb' => array(
                    'admin.dashboard' => 'Dashboard',
                    '' => 'Roles and Permissions',
                    '#' => 'Role',
                ),
            ),
        );

        return view('admin.role.index', $this->data); 
    }

    public function create() {
        $this->data = array(
            'title' => 'Create Role | ',
            'breadcrumbs' => array(
                'title' => 'Role',
                'breadcrumb' => array(
                    'admin.dashboard' => 'Dashboard',
                    '#' => 'Roles and Permissions',
                    'admin.role.index' => 'Role',
                    '' => 'Create',
                ),
            ),
        );

        $permissions = Permission::select(array(
            'id', 'name',
        ))->latest()->get();

        $this->data['permissions'] = $permissions;

        return view('admin.role.create', $this->data);
    }

    public function store( Request $request ) {
        $validatedData = $request->validate(array(
            'name' => array('required', 'string', 'unique:roles,name'),
            'permissions' => array('required', 'array'),
        ));

        $role = Role::create(array(
            'name' => $validatedData['name'],
        ));

        if ($role) {
            $role->permissions()->sync($validatedData['permissions']);
            if (isset($request->save_and_new)) {
                return redirect()->back()->withStatus('New role has been created.');
            }
            return redirect()->route('admin.role.index')->withStatus('New role has been created.');
        }
        return redirect()->back()->withErrors('Something went wrong while create role')->withInput();
    }

    public function edit( $id ) {
        $role = Role::select(array(
            'id', 'name'
        ))->findOrFail($id);

        $this->data = array(
            'title' => 'Edit Role | ',
            'breadcrumbs' => array(
                'title' => 'Role',
                'breadcrumb' => array(
                    'admin.dashboard' => 'Dashboard',
                    '#' => 'Roles and Permissions',
                    'admin.permission.index' => 'Role',
                    '' => 'Edit',
                ),
            ),
        );

        $this->data['role'] = $role;

        $role_permissions = array();
        if ( $role->permissions ) {
            $role_permissions = $role->permissions->pluck('id')->toArray();
        }
        $this->data['role_permissions'] = $role_permissions;
        
        $permissions = Permission::select(array(
            'id', 'name',
        ))->latest()->get();
        $this->data['permissions'] = $permissions;

        return view('admin.role.edit', $this->data);
    }

    public function update( Request $request, $id ) {
        $validatedData = $request->validate(array(
            'name' => array('required', 'string', 'unique:roles,name,'.$id),
            'permissions' => array('required', 'array'),
        ));

        $role = Role::where(array('id' => $id))->update(array(
            'name' => $validatedData['name'],
        ));

        if ( $role ) {
            Role::find($id)->permissions()->sync($validatedData['permissions']);
            return redirect()->route('admin.role.index')->withStatus('Role has been updated.');
        }
        return redirect()->back()->withErrors('Something went wrong while update role')->withInput();
    }

    public function destroy( Request $request, $id ) {
        $role = Role::findOrFail($id);

        if ( $role ) {
            if ( $role->delete() ) {
                $this->data = array(
                    'status' => true,
                    'message' => 'Role has been deleted.',
                );
            } else {
                $this->data = array(
                    'status' => false,
                    'message' => 'Something went wrong while delete the role.',
                );
            }
        } else {
            $this->data = array(
                'status' => false,
                'message' => 'Someting went wrong, Role not found.',
            );
        }
        return response()->json($this->data);
    }
}
