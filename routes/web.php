<?php

use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\ServiceController;

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
    return view('properti');
});
route::get('/properti',[EmployeeController::class,'index'])->name('properti');

 route::get('/employee', [EmployeeController::class,'properti'])->name('employee');
 
 route::get('/transaksi', [EmployeeController::class,'transaksi'])->name('transaksi');
 route::post('/viewtransaksi', [EmployeeController::class,'viewtransaksi'])->name('viewtransaksi');

 route::get('/tampilkantransaksi/{id}', [EmployeeController::class,'tampilkantransaksi'])->name('tampilkantransaksi');
 route::post('/updatetransaksi/{id}', [EmployeeController::class,'updatetransaksi'])->name('updatetransaksi');
 route::get('/delete/{id}', [EmployeeController::class,'delete'])->name('delete');

 route::resource('/service',ServiceController::class);
 route::resource('/dashboard',DashboardController::class);
