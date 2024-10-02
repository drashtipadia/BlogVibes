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
        return $this->hasMany(Category::class, 'category_id', 'category_id');

    }
}