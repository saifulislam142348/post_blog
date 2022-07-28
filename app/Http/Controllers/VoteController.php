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

class VoteController extends Controller
{
    public function postlike(Request $request){
        $vote= new Vote();
        $vote->user_id=$request->input('user_id');
        $vote->post_id=$request->input('post_id');
        $vote->save();
        return back();
      }

    //post like delete
    public function deletelike($id){
        $postlikedelete= Vote::where('post_id',$id)->first();
        // dd( $postlikedelete);
      
        $postlikedelete->delete();
        return redirect()->back();
    }

}
