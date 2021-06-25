<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Backend\UserController;
use App\Http\Controllers\Backend\CountryController;
use App\Http\Controllers\Backend\Statecontroller;
use App\Http\Controllers\Backend\CityController;
use App\Http\Controllers\Backend\DepartmentController;
use App\Http\Controllers\Api\EmployeeController;
use App\Http\Controllers\Backend\ChangePasswordController;

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
});


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::resource('users', UserController::class);
Route::resource('countries', CountryController::class);
Route::resource('states', Statecontroller::class);
Route::resource('cities', CityController::class);
Route::resource('departments', DepartmentController::class);

Route::post('users/{user}/change-password', [ChangePasswordController::class, 'changePassword'])->name('users.change.password');

Route::get('/{any}', function () {
    return view('employees.index');
})->where("any", ".*");
