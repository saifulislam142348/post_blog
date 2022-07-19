<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
   public function index(){
    return view('admin/index');
   }

   public function comment(){
    return view('admin/comments/index');
   }

   public function commentReplay(){
    return view('admin/commentReplay/index');
   }
   public function catagory(){
    return view('admin/catagory/index');
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
