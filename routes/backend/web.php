<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Backend\Auth\ForgetPasswordController;
use App\Http\Controllers\Backend\Auth\LoginController;
use App\Http\Controllers\Backend\Auth\LogoutController;
use App\Http\Controllers\Backend\DashboardController;
use App\Http\Controllers\Backend\QuestionController;

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

Auth::routes();

//login route start
Route::get('/adminpanel', [LoginController::class, 'login_show'])->name('login.show');
Route::post('/do-login', [LoginController::class, 'do_login'])->name('do.login');
//login route end

//logout route start
Route::get('/do-logout', [LogoutController::class, 'do_logout'])->name('do.logout');
//logout route end

//backend route group start

Route::group(['middleware' => 'super_admin'], function () {
    Route::get('/admin/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    
    //index route start
    Route::get('/admin/all-question', [QuestionController::class, 'all_question'])->name('question.all');
    Route::get('/admin/all-question/data', [QuestionController::class, 'data'])->name('question.data');
    
    //add route
    Route::get('/admin/add-question', [QuestionController::class, 'create_question'])->name('question.create');
    Route::post('/admin/add-question', [QuestionController::class, 'add'])->name('question.add');

     //question edit
     Route::get("/admin/question/edit/{id}",[QuestionController::class,'edit'])->name('question.edit');
     Route::post("/adminadmin/question/edit/{id}",[QuestionController::class,'update'])->name('question.update'); 

    //question delete
     Route::get("/admin/question/delete/{id}",[QuestionController::class,'delete_question'])->name('question.delete'); 
    
  
});
//backend route group end

