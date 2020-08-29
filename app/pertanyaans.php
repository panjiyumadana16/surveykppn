<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class pertanyaans extends Model
{
    protected $table = "pertanyaans";
    
    protected $fillable = ['p_id','p_surveyid','p_pertanyaan','p_tipe','p_harus_terjawab'];
}
