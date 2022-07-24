<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ProfileImage;

class ProfileImageController extends Controller
{
    public function store(Request $request){
        $profileImage= new ProfileImage;
        if($request->hasfile('image'))
        {
            $file = $request->file('image');
            $extenstion = $file->getClientOriginalExtension();
            $filename = 'storage/profile/'.rand(1,10000).'.'.$extenstion;
            $file->move('storage/profile/', $filename);
            $profileImage->image = $filename;
        }
        $profileImage->save();
       return redirect()->back()->with('status','Profile image upload succefully');

    }
}
