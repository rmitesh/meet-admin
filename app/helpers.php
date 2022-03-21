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

if (! function_exists('get_roles')) {
    /**
     * Get logged in user role list
     * 
     * @return array
     */
    function get_roles() {
        if (auth()->check()) {
            $user_roles = auth()->user()->getRoleNames('roles')->toArray();
            return $user_roles;
        }
        return array();
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
        $user_roles = get_roles();
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
