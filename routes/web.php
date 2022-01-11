<?php

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
    return view('home');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::resource ('housetype', 'App\Http\Controllers\HousetypeController');
Route::resource ('houses','App\Http\Controllers\HousesController');
Route::resource ('tenants', 'App\Http\Controllers\TenantsController');
Route::resource ('payments', 'App\Http\Controllers\PaymentsController');
Route::resource ('invoice', 'App\Http\Controllers\InvoiceController');

Route::get ('housetype', function (){
  $plain = \DB::table ('housetype',)->get();
  return view ('housetype', ['plain' =>$plain]);
});
Route::get ('houses', function (){
  $apartment = \DB::table ('houses',)->get();
  return view ('houses', ['apartment' =>$apartment]);
});
Route::get ('tenants', function (){
  $whispers = \DB::table ('tenants',)->get();
  return view ('tenants', ['whispers' =>$whispers]);
});
Route::get ('payments', function (){
  $cash = \DB::table ('payments',)->get();
  return view ('payments', ['cash' =>$cash]);
});

require __DIR__.'/auth.php';
