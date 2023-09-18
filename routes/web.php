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

Route::get('/empleados', 'App\Http\Controllers\EmpleadoController@index')->name('empleados.index');
Route::get('/empleados/create', 'App\Http\Controllers\EmpleadoController@create')->name('empleados.create');
Route::post('/agregar-empleado', 'App\Http\Controllers\EmpleadoController@agregarEmpleado')->name('agregar.empleado');
Route::post('/empleados/store', 'App\Http\Controllers\EmpleadoController@store')->name('empleados.store');
Route::get('/empleados/edit/{id}', 'App\Http\Controllers\EmpleadoController@edit')->name('empleados.edit');
Route::put('/empleados/update/{id}', 'App\Http\Controllers\EmpleadoController@update')->name('empleados.update');
Route::delete('/empleados/delete/{id}', 'App\Http\Controllers\EmpleadoController@destroy')->name('empleados.destroy');
