<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Posts extends Model
{
    protected $table = 'posts';
    protected $fillable = ['title', 'body', 'image', 'description', 'slug', 'user_id', 'category_id'];

    public function getCategory()
    {
        return $this->belongsTo('App\Categories', 'category_id', 'id');
    }

    public function getUser()
    {
        return $this->belongsTo('App\User', 'user_id', 'id');
    }
}
