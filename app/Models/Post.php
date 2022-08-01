<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    public function users()
    {
        return $this->belongsTo(User::class,'user_id','id');
    }
    public function comments()
    {
        return $this->hasMany(Comment::class);
    }
    public function commentReplay()
    {
        return $this->hasMany(CommentReplay::class);
    }
    public function catagories()
    {
        return $this->belongsTo(Catagory::class,'category_id', 'id');
    }
  // Likes
    public function likes(){
        return $this->hasMany(LikeDislike::class ,'post_id')->sum('like');
    }
    // Dislikes
    public function dislikes(){
        return $this->hasMany(LikeDislike::class ,'post_id')->sum('dislike');
    }

    
    public function votes(){
        return $this->hasMany(Vote::class);
    }
}
