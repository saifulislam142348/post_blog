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

class CatagoryController extends Controller
{
    public function store(Request $request)
    {
       
        $rules=[
            'name'=>'required',
         
    
        
        ];
           $this->validate($request,$rules);
        $catagory = new Catagory;
        $catagory->name = $request->input('name');
    
    
        $catagory->save();
        return redirect()->back()->with('status','Catagory added Successfully');
    }
    public function delete($id){
        $catagory= Catagory::find($id);
        $catagory->delete();
        return redirect()->back()->with('status','Catagory Deleted Successfully');

    }

    public function edit($id){
        $catagory= Catagory::find($id);
   
        return view('admin/catagory/edit/', compact('catagory'));

    }
    public function changeStatus( $id){
        $getstatus=Catagory::select('type')->where('id',$id)->first();

        if($getstatus->type==1){
            $status=0;
        }else{
            $status=1;
        }
        Catagory::where('id',$id)->update(['type'=>  $status]);

      
        return back()->with('status','status update successfully');
   
    

    }
    
  
}
