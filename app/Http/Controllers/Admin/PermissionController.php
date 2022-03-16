<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Permission;

class PermissionController extends Controller
{
    public function index( Request $request ) {

        if ( $request->ajax() ) {
            
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
        dd($request->all());
        // Permission::create();
    }
}
