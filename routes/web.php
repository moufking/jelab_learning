<?php

use App\Http\Controllers\FormationController;
use Illuminate\Support\Facades\Route;
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

Route::get('/', function () {
    return view('template');
});

Route::resource("formation",FormationController::class)->only(["index"]);

//le middleware auth verifie que l'utilsateur est authentifié.
Route::get("/dashboard",function(){
    return view("client.dashboard");
})->middleware("auth");

Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');

//Langues
Route::get('lang/{lang}', ['as' => 'lang.switch', 'uses' => 'App\Http\Controllers\LanguageController@switchLang']);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
