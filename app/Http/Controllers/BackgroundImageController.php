<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\backgroundImage;

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
        return back()->with('status','background image add successfully');

        
    }
}
