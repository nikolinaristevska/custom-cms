<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class StaticPage extends Model
{
    protected $table = 'static_page';

    protected $fillable = ['id', 'title', 'description', 'image', 'slug'];
}
