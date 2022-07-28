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
use Illuminate\Support\Facades\Auth;
class FriendController extends Controller
{
   public function friend(Request $request){
    $friends= new Friend();
    $friends->auth_id=Auth::user()->id;
    $friends->user_id=$request->input('user_id');
    $friends->save();
    return back()->with('status','friend request successfully');
   }
    public function unfriend($id){
        $unfriend= Friend::where('user_id',$id)->first();
        $unfriend->delete();
        return redirect()->back()->with('status','friend request detete successfully');;
    }
    public function friendConfirm($id){
        $friendConfirm=Friend::select('friend')->where('user_id', $id)->first();
        if($friendConfirm->friend==0){
            $accept=1;
         }else{
                $accept=0;
            }
        
            Friend::where('user_id',$id)->update(['friend' => $accept]);
            // dd(  $friendConfirm);
            return  redirect()->back();
        }
    }
 
