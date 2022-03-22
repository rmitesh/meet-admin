<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;

class DashboardController extends Controller
{
    public function index() {
        $this->data = array(
            'title' => 'Admin Dashboard | ',
            'breadcrumbs' => array(
                'title' => 'Dashboard',
                'breadcrumb' => array(
                    '#' => 'Dashboard'
                ),
            ),
        );

        if ( get_user_role() === User::SUPER_ADMIN ) {
            $this->data['roles_count'] = Role::select('id')->where('name', '!=', User::SUPER_ADMIN)->count();
            
            // ingore super admin role and get all the user's count
            $this->data['users_count'] = User::whereHas('roles', function( $query ) {
                    return $query->whereNotIn('name', get_ignore_roles());
                })->select('id')->count();
        }

        return view('admin.dashboard', $this->data);
    }
}
