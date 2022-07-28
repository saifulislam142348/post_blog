<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Catagory;
use App\Models\Vote;
use App\Models\Friend;

class FriendController extends Controller
{
   public function friend(Request $request){
    $friends= new Friend();
    $friends->user_id=$request->input('user_id');
    $friends->save();
    return back()->with('status','friend request successfully');
   }
    public function unfriend($id){
        $unfriend= Friend::find($id);
        $unfriend->delete();
        return redirect()->back()->with('status','friend request detete successfully');;
    }
}
