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

class SearchController extends Controller
{
    public function autocomplete(Request $request)
    {
        $data = User::select("name")
                ->where("name","LIKE","%{$request->query}%")
                ->get();
   
        return response()->json($data);
    }
}
