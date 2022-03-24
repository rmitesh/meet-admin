<?php

use App\Models\User;

if (! function_exists('is_active')) {
    /**
     * Active current URL.
     *
     * @param  string|array  $path
     * @param  string    $class_name
     * @return string
     */
    function is_active( $url_name, $className = 'active' ) {
        $name = request()->route()->getName();
        if ( is_array( $url_name ) ) {
            return in_array( $name, $url_name ) ? $className : '';
        } else {
            return ( $name == $url_name ) ? $className : '';
        }
        return null;
    }
}

if (! function_exists('get_user_role')) {
    /**
     * Get logged in user role
     * @param  boolean      $multi_roles    flag for return role list
     * @return string|array
     */
    function get_user_role( $multi_roles = false ) {
        if (auth()->check()) {
            if ( $multi_roles ) {
                $user_roles = auth()->user()->getRoleNames('roles')->toArray();
                return $user_roles;
            } else {
                if ($role = auth()->user()->roles()->first()) {
                    return $role->name;
                }
            }
        }
        return null;
    }
}

if (! function_exists('get_ignore_roles')) {
    /**
     * Get Ingore user role list
     * 
     * @return array
     */
    function get_ignore_roles() {
        $roles = array();
        $user_roles = get_user_role( true );
        if (in_array(User::SUPER_ADMIN, $user_roles)) {
            $roles = array(
                User::SUPER_ADMIN,
            );
        } elseif (in_array(User::ADMIN, $user_roles)) {
            $roles = array(
                User::ADMIN,
                User::SUPER_ADMIN,
            );
        } else {
            $roles = array(
                User::ADMIN,
                User::SUPER_ADMIN,
            );
        }
        return $roles;
    }
}

if (! function_exists('random_password')) {
    /**
     * Generate random password
     * 
     * @param  integer      $length     number of length of password
     * @return string
     */
    function random_password( $length = 8 ) {
        $alphabet = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890';
        $pass = array();
        $alphaLength = strlen($alphabet) - 1;
        for ($i = 0; $i < $length; $i++) {
            $n = rand(0, $alphaLength);
            $pass[] = $alphabet[$n];
        }
        return implode($pass);
    }
}

if (! function_exists('validateUserRole')) {
    /**
     * Validate user role if end user will not modify Administration privileges.
     * 
     * @param  int|string       $id     User ID
     * @return App\Models\User
     */
    function validateUserRole( $id ) {
        return User::whereHas('roles', function ( $query ) {
            return $query->whereNotIn('name', get_ignore_roles());
        })->where('id', $id)->first();
    }
}

if (! function_exists('get_date_format_list')) {
    /**
     * Date Format List
     * 
     * @return array
     */
    function get_date_format_list() {
        return array(
            'd-m-Y' => date('d-m-Y'),
            'Y-m-d' => date('Y-m-d'),
        );
    }
}


if (! function_exists('get_time_format_list')) {
    /**
     * Time Format List
     * 
     * @return array
     */
    function get_time_format_list() {
        return array(
            'H:i' => date('H:i') . '( 24 Hours )',
            'h:i A' => date('h:i A') . ' ( 12 Hours ) ',
        );
    }
}


