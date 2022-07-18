<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
   public function index(){
    return view('admin.index');
   }

   public function comment(){
    return view('admin.comment.index');
   }

   public function commentReplay(){
    return view('admin.commentReplay.index');
   }
   public function catagory(){
    return view('admin.catagory.index');
   }
   public function posts(){
    return view('admin.posts.index');
   }
}
