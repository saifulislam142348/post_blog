<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Catagory;
use App\Models\User;
use App\Models\Post;
use App\Models\Vote;
use App\Models\Comment;


class CommentController extends Controller
{
   public function __construct()
   {
       $this->middleware('auth');
   }

   public function store(Request $request){
    $rules=[
        'message'=>'required',
     

    
    ];
       $this->validate($request,$rules);
    $comment = new Comment();
    $comment->post_id=$request->input('post_id');
    $comment->user_id=$request->input('user_id');
    $comment->message=$request->input('message');
 
    $comment->save();


return redirect('user/index')->with('status', 'public comment  successfully');
   }


   public function view($id){
    $post= post::find($id);
    //dd($comment);
    $comment= Comment::get();
    return view('user/comment/view', compact('post','comment'));
   }

   public function delete($id){
    $comment= Comment::find($id);
 
    $comment->delte();
    return redirect()->back()->with('status','comment Deleted Successfully');
   }
}
