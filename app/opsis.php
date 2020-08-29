<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class opsis extends Model
{
    protected $table = "opsis";
    
    protected $fillable = ['o_id','o_surveyid','o_pertanyaanid','o_opsijawaban'];
}
