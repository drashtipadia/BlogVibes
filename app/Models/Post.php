<?php

namespace App\Models;

use App\Models\Category;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    //
    protected $table = "post";
    protected $primaryKey = "post_id";

    public function getcategory()
    {
        return $this->belongsTo(Category::class, 'category_id', 'category_id');

    }
    public function getUser()
    {
        return $this->belongsTo(register_user::class, 'user_id', 'user_id');
    }
}