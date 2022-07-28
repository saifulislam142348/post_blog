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
class CommentReplayController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function store(Request $request){
        $rules=[
            'replay'=>'required',
         
    
        
        ];
           $this->validate($request,$rules);
        $CommentReplay = new CommentReplay();
        $CommentReplay->comment_id=$request->input('comment_id');
        $CommentReplay->user_id=$request->input('user_id');
        $CommentReplay->post_id=$request->input('post_id');
   
       
        $CommentReplay->replay=$request->input('replay');
     
        $CommentReplay->save();
    
    
    return redirect('user/index')->with('status', 'Replay  successfully');
       }
}
