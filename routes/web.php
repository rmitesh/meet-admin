<?php

use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\PermissionController;
use App\Http\Controllers\Admin\RoleController;
use App\Http\Controllers\Admin\SettingController;
use App\Http\Controllers\Admin\UserController;
use App\Models\User;
use Illuminate\Support\Facades\Route;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
})->name('welcome');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::group(array('prefix' => 'admin', 'middleware' => array('auth')), function() {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('admin.dashboard');

    // For Super Admin
    // setting
    Route::get('/setting', [SettingController::class, 'index'])
                ->middleware('role:'.User::SUPER_ADMIN)
                ->name('admin.setting.index');

    // permissions
    Route::get('/permission', [PermissionController::class, 'index'])->name('admin.permission.index');
    Route::get('/permission/create', [PermissionController::class, 'create'])->name('admin.permission.create');
    Route::post('/permission/store', [PermissionController::class, 'store'])->name('admin.permission.store');
    Route::get('/permission/edit/{id}', [PermissionController::class, 'edit'])->name('admin.permission.edit');
    Route::put('/permission/update/{id}', [PermissionController::class, 'update'])->name('admin.permission.update');
    Route::delete('/permission/delete/{id}', [PermissionController::class, 'destroy'])->name('admin.permission.delete');

    // roles
    Route::get('/role', [RoleController::class, 'index'])->name('admin.role.index');
    Route::get('/role/create', [RoleController::class, 'create'])->name('admin.role.create');
    Route::post('/role/store', [RoleController::class, 'store'])->name('admin.role.store');
    Route::get('/role/edit/{id}', [RoleController::class, 'edit'])->name('admin.role.edit');
    Route::put('/role/update/{id}', [RoleController::class, 'update'])->name('admin.role.update');
    Route::delete('/role/delete/{id}', [RoleController::class, 'destroy'])->name('admin.role.delete');

    // users
    Route::get('/user', [UserController::class, 'index'])->name('admin.user.index');
    Route::get('/user/create', [UserController::class, 'create'])->name('admin.user.create');
    Route::post('/user/store', [UserController::class, 'store'])->name('admin.user.store');
    Route::get('/user/edit/{id}', [UserController::class, 'edit'])->name('admin.user.edit');
    Route::put('/user/update/{id}', [UserController::class, 'update'])->name('admin.user.update');
    Route::delete('/user/delete/{id}', [UserController::class, 'destroy'])->name('admin.user.delete');

});

require __DIR__.'/auth.php';
