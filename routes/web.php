<?php

use App\Http\Controllers\Admin_Answer_Controller;
use App\Http\Controllers\Admin_Course_Controller;
use App\Http\Controllers\Admin_Question_Controller;
use App\Http\Controllers\Admin_Quiz_Controller;
use App\Http\Controllers\Admin_Slide_Controller;
use App\Http\Controllers\AdminAdvertisementController;
use App\Http\Controllers\AdminBlogController;
use App\Http\Controllers\AdminUserController;
use App\Http\Controllers\Blog_Controller;
use App\Http\Controllers\Course_controller;
use App\Http\Controllers\Quiz_controller;
use Illuminate\Support\Facades\Auth;
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
});



Route::group(['middleware'=>'admin'],function(){
    Route::get('/admin',function (){
        return  view('admin.index') ;
    });
    Route::resource('admin/users',AdminUserController::class);
    Route::resource('admin/blog',AdminBlogController::class);
    Route::resource('admin/advertisement',AdminAdvertisementController::class);
    Route::resource('admin/course',Admin_Course_Controller::class);
    Route::resource('admin/slide',Admin_Slide_Controller::class);
    Route::resource('admin/quiz',Admin_Quiz_Controller::class);
    Route::resource('admin/question',Admin_Question_Controller::class);

});




Route::resource('/blog',Blog_Controller::class);
Route::resource('/course',Course_controller::class);
Route::resource('/quiz',Quiz_controller::class);



Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
