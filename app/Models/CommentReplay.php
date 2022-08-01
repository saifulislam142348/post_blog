<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CommentReplay extends Model
{
    use HasFactory;
    public function commentreplay()
    {
        return $this->belongsTo(Comment::class);
    }
    public function users()
    {
        return $this->belongsTo(User::class,'user_id','id');
    }

}
