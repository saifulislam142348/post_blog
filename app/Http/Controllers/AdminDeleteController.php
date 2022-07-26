<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Catagory;
use App\Models\User;
use App\Models\Post;
use App\Models\Vote;
use App\Models\CommentReplay;
use App\Models\Comment;
use App\Models\ProfileImage;
use App\Models\backgroundImage;

class AdminDeleteController extends Controller
{
  
   public function user(Request $request,$id){
    $user=User::find($id);
    $user->delete();
    return redirect()->back()->with('status', 'delete user record successfully');

   }
   public function post(Request $request,$id){
    $post=Post::find($id);
    $post->delete();
    return redirect()->back()->with('status', 'delete post record successfully');

   }
   public function catagory(Request $request,$id){
    $catagory=Catagory::find($id);
    $catagory->delete();
    return redirect()->back()->with('status', 'delete catagory record successfully');

   }
   public function photo(Request $request,$id){
    $photo=ProfileImage::find($id);
    $photo->delete();
    return redirect()->back()->with('status', 'delete photo record successfully');

   }
}
