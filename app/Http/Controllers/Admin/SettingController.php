<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Setting;
use Illuminate\Http\Request;

class SettingController extends Controller
{
    public function index() {

        $time_zone_lists = \DateTimeZone::listIdentifiers(\DateTimeZone::ALL);

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

        # date-time
        $this->data['time_zone_lists'] = $time_zone_lists;
        $this->data['date_format_lists'] = get_date_format_list();
        $this->data['time_format_lists'] = get_time_format_list();

        // Setting Model

        return view('admin.setting.index', $this->data);
    }

    public function updateCompanyInfo( Request $request ) {
        if ( $request->ajax() ) {
            $validatedData = $request->validate(array(
                'company_name' => array('required', 'string'),
                'company_email' => array('required', 'email'),
            ));

            foreach ($validatedData as $name => $value) {
                Setting::updateOrCreate(
                    array(
                        'name' => 'company-info',
                        'key' => $name
                    ),
                    array( 'value' => $value ),
                );
            }

            $this->data = array(
                'status' => true,
                'message' => 'Company Information has beed saved.',
            );

            return response()->json($this->data);
        }
    }
}
