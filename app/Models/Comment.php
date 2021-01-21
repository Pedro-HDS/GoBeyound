<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;


class Comment extends Model
{
    protected $fillable = ['comment', 'created_at', 'update_at'];

    protected $casts = [
        'created_at' => 'datetime',
        'update_at'   => 'datetime',
    ];
    public function post()
    {
        return $this->belongsTo(Comment::class, 'comment_id',"id");
    }
}
