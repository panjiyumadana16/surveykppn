<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class surveys extends Model
{
    protected $table = "surveys";
    
    protected $fillable = ['s_id','s_judul','s_deskripsi'];
}
