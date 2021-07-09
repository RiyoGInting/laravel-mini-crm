<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CompanyController;
use App\Http\Controllers\EmployeeController;
use Illuminate\Support\Facades\Auth;

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

Route::get('companies', [CompanyController::class, 'index']);
Route::get('companies/list', [CompanyController::class, 'getAll'])->name('companies.list');

Route::get('employees', [EmployeeController::class, 'index']);
Route::get('employees/list', [EmployeeController::class, 'getAll'])->name('employees.list');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('addCompanies', [CompanyController::class, 'addIndex']);
Route::post('addCompanies', [CompanyController::class, 'create'])->name('create.company');

Route::get('addEmployees', [EmployeeController::class, 'addIndex']);
Route::post('addEmployees', [EmployeeController::class, 'create'])->name('create.employee');
