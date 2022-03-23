<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SettingController extends Controller
{
    public function index() {
        $this->data = array(
            'title' => 'Setting | ',
            'breadcrumbs' => array(
                'title' => 'Setting',
                'breadcrumb' => array(
                    '#' => 'Dashboard',
                    '' => 'Setting'
                ),
            ),
        );

        return view('admin.setting.index', $this->data);
    }
}
