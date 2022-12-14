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
    return view('welcome');
})->name("index");

Route::get('/comics',"ComicsController@index")->name("comics.index");
Route::get('/comics/create',"ComicsController@create")->name("comics.create");
Route::post("/comics","ComicsController@store")->name("comics.store");
Route::get('/comics/{comic}',"ComicsController@show")->name("comics.show");
Route::get("/comics/{comic}/edit","ComicsController@edit")->name("comics.edit");
Route::patch("/comics/{comic}","ComicsController@update")->name("comics.update");
Route::delete("/comics/{comic}","ComicsController@destroy")->name("comics.destroy");

