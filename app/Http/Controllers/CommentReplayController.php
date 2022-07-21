<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comment;
use App\Models\CommentReplay;

class CommentReplayController extends Controller
{
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
    
    
    return back()->with('status', 'Replay  successfully');
       }
}
