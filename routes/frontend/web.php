<?php


use App\Http\Controllers\Frontend\Auth\LoginController;
use App\Http\Controllers\Frontend\Auth\RegisterController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Frontend\HomePageController;
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

//home roue
Route::get("/", [HomePageController::class, "index"])->name("home");
//login
Route::get("/login", [LoginController::class, "login"])->name("login");
Route::post("/login", [LoginController::class, "do_frontend_login"])->name("do.frontend.login");


Route::get("/user/register", [RegisterController::class, "register"])->name("frontend.register");
Route::post("/user/register", [RegisterController::class, "do_register"])->name("do.frontend.register");
//Auth::routes();

//profile
Route::group(['prefix'  =>  'user'  , 'middleware'  =>  'web'], function(){
    require_once "profile/user.php";
});
