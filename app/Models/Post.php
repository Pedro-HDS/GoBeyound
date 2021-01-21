<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
        protected $fillable = ['title', 'content', 'image'];
    

        public function post()
        {
            return $this->belongsTo(Post::class, 'post_id',"id");
        }
}
