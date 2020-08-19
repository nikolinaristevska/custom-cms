<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Settings extends Model
{
    protected $table = 'settings';
    protected $fillable = ['title', 'url', 'email', 'address', 'phone', 'image',
        'facebook', 'twitter', 'likedin', 'instagram'];
}
