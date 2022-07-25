<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Catagory;
use App\Models\Post;
use App\Models\user;
use App\Models\ProfileImage;
use App\Models\BackgroundImage;
use App\Models\Comment;
use App\Models\CommentReplay;
use Auth;

class AdminController extends Controller
{
  
   public function index(){

      $post =Post::get();
      $catagory =Catagory::get();
      $profileImage =ProfileImage::get();
      $BpbackgroundImage =BackgroundImage::get();
      $user = User::get();
      $comment =Comment::get();
      $commentReplay =CommentReplay::get();
    return view('admin/index', compact('post','catagory','profileImage','backgroundImage','user'));
   }

   public function comment(){
    return view('admin/comments/index');
   }

   public function commentReplay(){
    return view('admin/commentReplay/index');
   }
   public function catagory(){
      $catagory = Catagory::all();
     
    return view('admin/catagory/index', compact('catagory'));
   }
   public function create(){
    return view('admin/catagory/create');
   }
   public function posts(){
    return view('admin/posts/index');
   }
   public function like(){
    return view('admin/votes/index');
   }
   public function user(){
    return view('admin/user/index');
   }
   public function photo(){
    return view('admin/posts/photo');
   }
}
