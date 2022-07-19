<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\CommentReplayController;
use App\Http\Controllers\CatatoryController;

use App\Http\Controllers\HomeController;



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


// usercontroller

Route::get('user/index',[UserController::class ,'index'])->name('user');
Route::get('user/notification',[UserController::class ,'notification'])->name('notification');
Route::get('user/profile',[UserController::class ,'profile'])->name('userprofile');
Route::get('user/comment/index',[UserController::class ,'comment'])->name('usercomment');
Route::get('user/commentReplay/index',[UserController::class ,'commentReplay'])->name('usercommentReplay');
Route::get('user/commentReplay/view',[UserController::class ,'ReplayView'])->name('userReplayView');
Route::get('user/likeposts',[UserController::class ,'likePosts'])->name('userlikeposts');

//adminController
Route::get('Admin/index',[AdminController::class ,'index'])->name('AdminDashboard');
Route::get('Admin/catagory/index',[AdminController::class ,'catagory'])->name('Admincatagory');
Route::get('Admin/comments/index',[AdminController::class ,'comment'])->name('Admincomment');
Route::get('Admin/commentReplay/index',[AdminController::class ,'commentReplay'])->name('AdmincommentReplay');
Route::get('Admin/posts/index',[AdminController::class ,'posts'])->name('Adminposts');
Route::get('Admin/posts/photo',[AdminController::class ,'photo'])->name('Adminphoto');
Route::get('Admin/votes/index',[AdminController::class ,'like'])->name('Adminlvote');
Route::get('Admin/user/index',[AdminController::class ,'user'])->name('Adminuser');

//Homecontroller
Route::get('/index',[HomeController::class ,'index'])->name('index');
Route::get('/search',[HomeController::class ,'search'])->name('search');
Route::get('/post',[HomeController::class ,'post'])->name('post');
Route::get('/posts',[HomeController::class ,'posts'])->name('posts');
Route::get('/catagories',[HomeController::class ,'catagories'])->name('catagories');
Route::get('/catagorypost',[HomeController::class ,'catagorypost'])->name('catagorypost');