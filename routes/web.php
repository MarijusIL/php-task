<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\CompanyController;
use App\Models\Company;
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

Route::group(['prefix' => 'employees'], function(){
   Route::get('', [EmployeeController::class, 'index'])->name('employee.index')->middleware('auth');
   Route::get('create', [EmployeeController::class, 'create'])->name('employee.create')->middleware('auth');
   Route::post('store', [EmployeeController::class, 'store'])->name('employee.store')->middleware('auth');
   Route::get('edit/{employee}', [EmployeeController::class, 'edit'])->name('employee.edit')->middleware('auth');
   Route::post('update/{employee}', [EmployeeController::class, 'update'])->name('employee.update')->middleware('auth');
   Route::post('delete/{employee}', [EmployeeController::class, 'destroy'])->name('employee.destroy')->middleware('auth');
   Route::get('show/{employee}', [EmployeeController::class, 'show'])->name('employee.show')->middleware('auth');
});
Route::group(['prefix' => 'companies'], function(){
   Route::get('', [CompanyController::class, 'index'])->name('company.index');
   Route::get('show/{company}', [CompanyController::class, 'show'])->name('company.show');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');