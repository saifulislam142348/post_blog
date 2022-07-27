<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Catagory;
use App\Models\Vote;
class PostController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
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
  

   return redirect('user/index')->with('status', 'Your post has been successfully');
 }
}
public function delete($id){
    $post= Post::find($id);
    $post->delete();
    return redirect()->back()->with('delete','post Deleted Successfully');
}

public function edit($id){
    $post= Post::find($id);
    $catagory= Catagory::get();
    
    return view('user/post/edit',compact('post','catagory'));
}


public function update(Request $request , $id){
    $post= Post::find($id);


    if($request->hasfile('image')){
 
     
           $name=$request->file('image')->getClientOriginalName();
           $request->file('image')->move(public_path().'/images/', $name);  
           $data = '/images/'.$name;  

    }
           $post->user_id=$request->input('user_id');
           $post->category_id=$request->input('category_id');
           $post->title=$request->input('title');
           $post->body=$request->input('body');
           $post->image=$data;
           $post->update();

           return redirect('user/index')->with('edit', 'Your post has been  update successfully');

            

        

        }
      public function postlike(Request $request){
        $vote= new Vote();
        $vote->user_id=$request->input('user_id');
        $vote->post_id=$request->input('post_id');
        $vote->save();
        return back();
      }
      //post like delete
      public function dislike($id){
        $post= Vote::find($id);
        $post->delete();
        return redirect()->back();
    }

}
