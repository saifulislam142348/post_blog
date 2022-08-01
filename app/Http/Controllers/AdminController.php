<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Catagory;
use App\Models\User;
use App\Models\Post;
use App\Models\Vote;
use App\Models\CommentReplay;
use App\Models\Friend;
use App\Models\Comment;
use App\Models\ProfileImage;
use App\Models\backgroundImage;
use Auth;

class AdminController extends Controller
{
  
  
   public function index(){

      $post =Post::get();
      $catagory =Catagory::get();
      $profileImage =ProfileImage::get();
      $backgroundImage =BackgroundImage::get();
      $user = User::where('type','user')->get();
     // dd($user);
      $comment =Comment::get();
      $commentReplay =CommentReplay::get();
     // dd($user);
    return view('admin/index', compact('post','catagory','profileImage','backgroundImage','user'));
   }

   public function comment(){
    return view('admin/comments/index');
   }

   public function adminindex(){
      $post =Post::get();
      $catagory =Catagory::get();
      $profileImage =ProfileImage::get();
      $backgroundImage =BackgroundImage::get();
      $user = User::where('type','user')->get();
     // dd($user);
      $comment =Comment::get();
      $commentReplay =CommentReplay::get();
     // dd($user);
    return view('admin/adminIndex', compact('post','catagory','profileImage','backgroundImage','user'));

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
