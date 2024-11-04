<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    //
    protected $table = "comment";
    protected $primaryKey = "comment_id";

    public function get_post()
    {
        return $this->belongsTo(Post::class, 'post_id', 'post_id');
    }
    public function get_user()
    {
        return $this->belongsTo(register_user::class, 'user_id', 'user_id');
    }
}