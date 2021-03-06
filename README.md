<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

## Meet Admin
<b>Meet Admin</b> comes with ...
- Default Laravel authentication for the Admin and user.
- User roles & permissions with <a href="https://spatie.be/docs/laravel-permission/v5/introduction">Laravel Spatie Permission</a>

## Configure laravel spatie
Install the laravel spatie packge using,
```
composer require spatie/laravel-permission
```

```
php artisan vendor:publish --provider="Spatie\Permission\PermissionServiceProvider"
```

then please customize the table as per your project requirement.
once you modified your tables, hit the migration command

```
php artisan migrate
```

## Create Super Admin

after the migration, whatever you need to make changes, please make in the `database\seeders\DatabaseSeeder.php` file, if you have any.
then, hit the below command to create an Super Admin User. For more details your can refer the <a href="https://spatie.be/docs/laravel-permission/v5/basic-usage/super-admin">Laravel documentation</a> for the same. 

```
php artisan db:seed
```

<b>Super Admin Login:</b>
```
Email: meet.superadmin@gmail.com
Password: password
```