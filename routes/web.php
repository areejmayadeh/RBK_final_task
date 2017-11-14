<?php

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
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

Route::get('/', function () {
	// Schema::create('weather', function (Blueprint $table) {
 //           $table->increments('id');
 //           $table->string('city');
 //           // $table->save();
 //           });
    return view('welcome');
});
