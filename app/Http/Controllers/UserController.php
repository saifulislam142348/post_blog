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
use Auth;

class UserController extends Controller
{
    public function index(){
     // $commentreplay = CommentReplay::where('comment_id','id')->get();
      //dd($commentreplay);
        $post = Post::get();
       $profileimage= ProfileImage::latest()->first();

       $backgroundimage= backgroundImage::latest()->first();

    
      
        return view('user/index', compact('post','profileimage','backgroundimage' ));
      
    }
    public function votes($id){
      
        $like = Post::find($id);
       


      
        return view('user/post/index', compact('like'));
      
    }
    public function notification(){
        return view('user/notification');
      
    }
    public function profile(){
        return view('user/profile');
      
    }
    public function comment($id){
      $post=Post::find($id);
        return view('user/comment/index',compact('post'));
      
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
   // Save Like Or dislike
   function save_likedislike(Request $request){
    $data=new Vote;
    $data->post_id=$request->post;
    if($request->type=='like'){
        $data->like=1;
    }else{
        $data->dislike=1;
    }
    $data->save();
    return response()->json([
        'bool'=>true
    ]);
}

}
