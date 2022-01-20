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

Route::get('', function () {
    return view('home');
});
Route::get('/home1', function () {
    return view('home1');
});
Route::get('/dashboard1', function () {
    return view('dashboard1');
});
Route::get('/propertiesgrid', function () {
    return view('propertiesgrid');
});
Route::get('/dashboard1', function () {
    return view('dashboard1');
})->middleware(['auth'])->name('dashboard1');


Route::resource ('houses1','App\Http\Controllers\Houses1Controller');
Route::resource ('payments1', 'App\Http\Controllers\Payments1Controller');
Route::resource ('invoice', 'App\Http\Controllers\InvoiceController');
Route::resource ('tenants1', 'App\Http\Controllers\Tenants1Controller');
Route::resource ('properties', 'App\Http\Controllers\PropertiesController');

Route::get ('properties', function (){
  $plain = \DB::table ('properties',)->get();
  return view ('properties', ['plain' =>$plain]);
});
Route::get ('houses1', function (){
  $apartment = \DB::table ('houses1',)->get();
  return view ('houses1', ['apartment' =>$apartment]);
});
Route::get ('tenants1', function (){
  $whispers = \DB::table ('tenants1',)->get();
  return view ('tenants1', ['whispers' =>$whispers]);
});
Route::get ('payments1', function (){
  $cash = \DB::table ('payments1',)->get();
  return view ('payments1', ['cash' =>$cash]);
});

require __DIR__.'/auth.php';
