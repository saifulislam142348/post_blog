<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\CommentReplayController;
use App\Http\Controllers\CatagoryController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ProfileImageController;
use App\Http\Controllers\BackgroundImageController;
use App\Http\Controllers\AdminDeleteController;
use App\Http\Controllers\VoteController;
use App\Http\Controllers\FriendController;

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



// Like Or Dislike
Route::post('save-likedislike',[UserController::class ,'save_likedislike']);



//user login
Auth::routes();
  
/*------------------------------------------
--------------------------------------------
All Normal Users Routes List
--------------------------------------------
--------------------------------------------*/
Route::middleware(['auth', 'user-access:user'])->group(function () {
    // usercontroller

Route::get('user/index',[UserController::class ,'index'])->name('user');
Route::get('user/notification',[UserController::class ,'notification'])->name('notification');
Route::get('user/profile',[UserController::class ,'profile'])->name('userprofile');
Route::get('user/comment/index/{id}',[UserController::class ,'comment']);
Route::get('user/commentReplay/index',[UserController::class ,'commentReplay'])->name('usercommentReplay');
Route::get('user/commentReplay/view',[UserController::class ,'ReplayView'])->name('userReplayView');
Route::get('user/likeposts',[UserController::class ,'likePosts'])->name('userlikeposts');
Route::get('user/post/index',[UserController::class ,'post'])->name('userpost');
Route::post('user/post/index/{id}',[UserController::class ,'votes'])->name('userlike');
Route::post('user/post/like',[UserController::class ,'like']);

// ProfileimageController
Route::get('user/image/profile/add', [ProfileImageController::class, 'add'])->name('profil.image');
Route::get('user/image/profile/edit', [ProfileImageController::class, 'edit'])->name('profile.imageEdit');
Route::post('user/image/profile/image/store', [ProfileImageController::class, 'store'])->name('profile.imageStore');


// backgroundimageController
Route::get('user/image/background/add', [BackgroundImageController::class, 'add'])->name('background.image');
Route::get('user/image/background/edit', [BackgroundImageController::class, 'edit'])->name('background.imageEdit');
Route::post('user/image/background/image/store', [BackgroundImageController::class, 'store'])->name('background.imageStore');


//PostController

Route::post('user/post/index', [PostController::class, 'store'])->name('postStore');
Route::delete('user/post/delete/{id}', [PostController::class, 'delete']);
Route::get('user/post/edit/{id}', [PostController::class, 'edit']);
Route::put('user/post/index/update/{id}', [PostController::class, 'update'])->name('update');



//FriendController
Route::post('/user/friend/', [FriendController::class, 'friend'])->name('user.friend');
Route::delete('user/unfriend/{id}', [FriendController::class, 'unfriend']);
Route::get('user/pages/friendConfirm/{id}', [FriendController::class, 'friendConfirm']);


//votecontrooler
Route::post('/user/post_like/', [VoteController::class, 'postlike'])->name('post.like');
Route::delete('deletelike/{id}', [VoteController::class, 'deletelike']);

//comment controller
Route::post('user/comment/index', [CommentController::class, 'store'])->name('commentstore');
Route::get('user/comment/view/{id}', [CommentController::class, 'view']);
Route::delete('user/comment/view/delete/{id}', [CommentController::class, 'delete']);


//replaycomment

Route::post('user/comment/store', [CommentReplayController::class, 'store'])->name('replaystore');





  
    Route::get('/home', [HomeController::class, 'index'])->name('home');
});
  
/*------------------------------------------
--------------------------------------------
All Admin Routes List
--------------------------------------------
--------------------------------------------*/
Route::middleware(['auth', 'user-access:admin'])->group(function () {
    
//adminController
Route::get('Admin/index',[AdminController::class ,'index'])->name('AdminDashboard');
Route::get('Admin/catagory/index',[AdminController::class ,'catagory'])->name('Admincatagory');
Route::get('Admin/catagory/create',[AdminController::class ,'create'])->name('catagorycreate');
Route::get('Admin/comments/index',[AdminController::class ,'comment'])->name('Admincomment');
Route::get('Admin/commentReplay/index',[AdminController::class ,'commentReplay'])->name('AdmincommentReplay');
Route::get('Admin/posts/index',[AdminController::class ,'posts'])->name('Adminposts');
Route::get('Admin/posts/photo',[AdminController::class ,'photo'])->name('Adminphoto');
Route::get('Admin/votes/index',[AdminController::class ,'like'])->name('Adminlvote');
Route::get('Admin/user/index',[AdminController::class ,'user'])->name('Adminuser');
//catagory controller
Route::post('Admin/catagory/create', [CatagoryController::class, 'store'])->name('catagoryStore');
Route::delete('Admin/catagory/index/{id}', [CatagoryController::class, 'delete']);
Route::get('admin/catagory/edit/{id}', [CatagoryController::class, 'edit']);
Route::get('/statuschange/{id}', [CatagoryController::class, 'changeStatus']);

//AdminDeleteController
route::delete('admin/user/delete/{id}', [AdminDeleteController::class ,'user']);
route::delete('admin/post/delete/{id}', [AdminDeleteController::class ,'post']);
route::delete('admin/catagory/delete/{id}', [AdminDeleteController::class ,'catagory']);
route::delete('admin/photo/delete/{id}', [AdminDeleteController::class ,'photo']);

  
    Route::get('/admin/home', [HomeController::class, 'adminHome'])->name('admin.home');
});
  
/*------------------------------------------
--------------------------------------------
All Admin Routes List
--------------------------------------------
--------------------------------------------*/

 
Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');





