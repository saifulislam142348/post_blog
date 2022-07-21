<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Catagory;
class PostController extends Controller
{
   public function store(Request $request){
    $rules=[
        
        'title'=>'required',
        'body'=>'required',
        'image.*' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048'
    ];
       $this->validate($request,$rules);

      
      
       if($request->hasfile('image'))
       {

        //   foreach($request->file('image') as $image)
        //   {
              $name=$request->file('image')->getClientOriginalName();
              $request->file('image')->move(public_path().'/images/', $name);  
              $data = '/images/'.$name;  
    //       }
         
    //    }
  
       $post= new Post();
       $post->user_id=$request->input('user_id');
       $post->category_id=$request->input('category_id');
       $post->title=$request->input('title');
       $post->body=$request->input('body');
       $post->image=$data;
       $post->save();
  

   return back()->with('status', 'Your post has been successfully');
 }
}
}