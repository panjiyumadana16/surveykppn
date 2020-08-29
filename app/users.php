<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class users extends Model
{
    protected $table = "users";
    
    protected $fillable = ['u_id','u_username','u_password'];
}
