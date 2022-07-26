<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ProfileImage;

class ProfileImageController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function add(){
        return view('user/image/profile/add');
    }
    public function edit(){
        return view('user/image/profile/edit');
    }

    public function store(Request $request){
        $profileImage= new ProfileImage;
        $profileImage->user_id=$request->input('user_id');
        if($request->hasfile('image'))
        {
            $file = $request->file('image');
            $extenstion = $file->getClientOriginalExtension();
            $filename = 'storage/profile/'.rand(1,10000).'.'.$extenstion;
            $file->move('storage/profile/', $filename);
            $profileImage->image = $filename;
        }
        $profileImage->save();
       return redirect('user/index')->with('status','Profile image upload succefully');

    }
}
