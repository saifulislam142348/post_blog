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

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
    
        return view('home');
    }
    public function adminHome()
    {
        $post =Post::get();
        $catagory =Catagory::get();
        $profileImage =ProfileImage::get();
        $backgroundImage =BackgroundImage::get();
        $user = User::where('type','user')->get();
        $comment =Comment::get();
        $commentReplay =CommentReplay::get();
        return view('admin/index',compact('post','user','catagory','profileImage','backgroundImage','comment','commentReplay'));
    }
   
}
