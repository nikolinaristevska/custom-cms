<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RoleUser extends Model
{
    protected $table = 'role_user';
    protected $fillable = ['id', 'name'];


public function user()
{
    return $this->hasMany('App\User', 'role_user_id', 'id');
}

}
