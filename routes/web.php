<?php

use App\Http\Controllers\Admin\ActivityLogController;
use App\Http\Controllers\Admin\AdminIndexController;
use App\Http\Controllers\Admin\AdminNoteController;
use App\Http\Controllers\Admin\AdminUserController;
use App\Http\Controllers\Admin\PermissionController;
use App\Http\Controllers\Admin\RoleController;
use App\Http\Controllers\Admin\SettingsController;
use App\Http\Controllers\ProfileController;
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
    return redirect('login');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

//Super admin & Admin Routes
Route::middleware(['auth', 'role:super admin|admin'])->name('admin.')->prefix('admin')->group(function(){
    Route::get('dashboard', [AdminIndexController::class, 'index'])->name('dashboard');

    //Notes
    Route::resource('notes', AdminNoteController::class);

    //Users
    Route::resource('users', AdminUserController::class);

    //Roles
    Route::resource('roles', RoleController::class);

    //Permissions
    Route::resource('permissions', PermissionController::class);

    //Settings
    Route::put('settings/general-settings/update', [SettingsController::class, 'generalSettingsUpdate'])->name('settings.general-settings.update');
    Route::post('settings/general-settings/store', [SettingsController::class, 'generalSettingsStore'])->name('settings.general-settings.store');
    Route::get('settings/general-settings/create', [SettingsController::class, 'generalSettingsCreate'])->name('settings.general-settings.create');
    Route::get('settings/general-settings', [SettingsController::class, 'generalSettingsIndex'])->name('settings.general-settings');
    Route::resource('settings', SettingsController::class);

    //Activity Log
    Route::post('activity-log/clear-log', [ActivityLogController::class, 'clear'])->name('activity-log.clear-log');
    Route::resource('activity-log', ActivityLogController::class);
});

//User Routes
Route::middleware(['auth', 'role:user'])->name('user.')->prefix('user')->group(function(){
    //Route::get('/dashbaord', [AdminIndexController::class, 'index']);
});

//Staff Routes
Route::middleware(['auth', 'role:staff'])->name('staff.')->prefix('staff')->group(function(){
    //Route::get('/dashbaord', [AdminIndexController::class, 'index']);
});

//Client Routes
Route::middleware(['auth', 'role:client'])->name('client.')->prefix('client')->group(function(){
    //Route::get('/dashbaord', [AdminIndexController::class, 'index']);
});


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
