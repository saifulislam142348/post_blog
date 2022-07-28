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

class BackgroundImageController extends Controller
{
   
    public function add(){
        return view('user/image/background/add');
    }
    public function edit(){
        return view('user/image/background/edit');
    }
    public function store(Request $request){
        $backgroundimage= new backgroundImage;
        $backgroundimage->user_id=$request->input('user_id');
        if($request->hasfile('image')){
            $file=$request->file('image');
            $extenstion=$file->getClientOriginalExtension();
            $filename='storage/background/'.rand(100,10000).'.'.$extenstion;
            $file->move('storage/background/', $filename);
            $backgroundimage->image=$filename;
        }
        $backgroundimage->save();
        return redirect('user/index')->with('status','background image add successfully');

        
    }
}
