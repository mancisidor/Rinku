<?php
use app\Http\Controllers;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('index');
});

Route::get('/calcular-sueldo', 'App\Http\Controllers\SalaryCalculatorController@showForm')->name('show.salary.form');
Route::post('/calcular-sueldo', 'App\Http\Controllers\SalaryCalculatorController@calculateSalary')->name('calculate.salary');

Route::get('/empleados', 'EmpleadoController@index')->name('empleados.index');
Route::get('/empleados/create', 'EmpleadoController@create')->name('empleados.create');
Route::post('/empleados/store', 'EmpleadoController@store')->name('empleados.store');
Route::get('/empleados/edit/{id}', 'EmpleadoController@edit')->name('empleados.edit');
Route::put('/empleados/update/{id}', 'EmpleadoController@update')->name('empleados.update');
Route::delete('/empleados/delete/{id}', 'EmpleadoController@destroy')->name('empleados.destroy');
