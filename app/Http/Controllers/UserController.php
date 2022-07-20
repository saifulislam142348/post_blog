<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Catagory;
use App\Models\User;
use App\Models\Post;

class UserController extends Controller
{
    public function index(){
      
        $post = Post::get();
       


      
        return view('user/index', compact('post'
    ));
      
    }
    public function votes($id){
      
        $post = Post::find($id);
       


      
        return view('user/index', compact('post'));
      
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
    public function ReplayView(){
        return view('user/commentReplay/view');
      
    }
    public function likePosts(){
        return view('user/likeposts');
      
    }
    public function post(){
        $user= User::all();
        $catagory= Catagory::all();
      
        return view('user/post/index', compact('user','catagory'));
      
    }
    public function like(Request $request){
        $like=  new Vote;
        $like->post_id=$request->post;
        if($request->type=='like'){
            $like->like=1;

        }
        $like->save();
     
      
   return response()->json(['bool'=>true]);
      
    }

}
