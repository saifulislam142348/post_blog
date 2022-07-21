<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;
    public function users()
    {
        return $this->belongsTo(User::class,'user_id','id');
    }
    public function posts()
    {
        return $this->belongsTo(Post::class,'post_id','id');
    }

    public function replies()
    {
        return $this->hasMany(CommentReplay::class, 'comment_id', 'id');
    }


}
