<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Permission;
use DataTables;

class PermissionController extends Controller
{
    public function index( Request $request ) {

        if ( $request->ajax() ) {
            $permissions = Permission::latest()->get();
            return DataTables::of($permissions)
                    ->addIndexColumn()
                    ->addColumn('name', function( $row ) {
                        return $row->name;
                    })
                    ->addColumn('created_at', function( $row ) {
                        return date('dS F, Y h:ia', strtotime($row->created_at));
                    })
                    ->addColumn('action', function( $row ) {
                        $btn = '
                            <a href="'. route('admin.permission.edit', $row->id) .'" class="btn btn-outline-info btn-sm mr-1" title="Edit Permission">
                                <i class="fas fa-edit"></i>
                            </a>
                        ';
                        $btn .= '
                            <a href="javascript: void(0);" data-xid="'.$row->id.'" class="delete-permission btn btn-outline-danger btn-sm" title="Delete Permission">
                                <i class="fas fa-trash"></i>
                            </a>
                        ';
                       return $btn;
                    })
                    ->rawColumns(['name', 'created_at', 'action'])
                    ->make(true);
        }

        $this->data = array(
            'title' => 'Permission | ',
            'breadcrumbs' => array(
                'title' => 'Permission',
                'breadcrumb' => array(
                    'admin.dashboard' => 'Dashboard',
                    '#' => 'Roles and Permissions',
                    '#' => 'Permission',
                ),
            ),
        );

        return view('admin.permission.index', $this->data);
    }

    public function create() {
        $this->data = array(
            'title' => 'Create Permission | ',
            'breadcrumbs' => array(
                'title' => 'Create Permission',
                'breadcrumb' => array(
                    'admin.dashboard' => 'Dashboard',
                    '#' => 'Roles and Permissions',
                    '#' => 'Permission',
                    '#' => 'Create',
                ),
            ),
        );

        return view('admin.permission.create', $this->data);
    }

    public function store( Request $request ) {
        $validtedData = $request->validate(array(
            'name' => array('required', 'string', 'unique:permissions,name'),
        ));

        $permission = Permission::create($validtedData);
        if ($permission) {
            if (isset($request->save_and_new)) {
                return redirect()->back()->withStatus('New permission has been created.');
            }
            return redirect()->route('admin.permission.index')->withStatus('New permission has been created.');
        }
        return redirect()->back()->withErrors('Something went wrong while create permission')->withInput();
    }
}
