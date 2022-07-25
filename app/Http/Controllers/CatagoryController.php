<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Catagory;
use App\Models\User;
use App\Models\Post;

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
    
}
