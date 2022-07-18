<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(){
        return view('user/index');
      
    }
    public function notification(){
        return view('user/notification');
      
    }
    public function profile(){
        return view('user/profile');
      
    }
    public function comment(){
        return view('user/comment/index');
      
    }
    public function commentReplay(){
        return view('user/commentReplay/index');
      
    }
    public function likePosts(){
        return view('user/likeposts');
      
    }
}
