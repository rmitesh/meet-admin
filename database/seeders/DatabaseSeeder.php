<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use App\Models\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        # Create Admin User
        try {
            $role = Role::create(array(
                'name' => 'Super Admin',
            ));

            if ($role) {
                $isAdminExist = User::select('id')->where(array(
                    'email' => 'meet.superadmin@gmail.com',
                ))->first();

                if (!$isAdminExist) {
                    $user = User::create(array(
                        'first_name' => 'Super',
                        'last_name' => 'Meet Admin',
                        'email' => 'meet.superadmin@gmail.com',
                        'email_verified_at' => date('Y-m-d h:i:s'),
                        'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
                    ));

                    $user->assignRole($role);
                }
            }
        } catch (Exception $e) {
            \Log::error('ERROR: '. $e->getMessage());
        }

    }
}
