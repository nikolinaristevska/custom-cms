<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = 'product';

    protected $fillable = ['title', 'slug', 'image', 'user_id', 'category_id'];

    public function getCategory()
    {
        return $this->belongsTo('App\Categories', 'category_id', 'id');
    }

    public function getUser()
    {
        return $this->belongsTo('App\User', 'user_id', 'id');
    }
}
