<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class GradeModel extends Model
{
    protected $table = 'grade';
    protected $fillable = [
        'id_grade', 'tingakatan', 'level', 'persen', 'grade', 'created_at', 'updated_at'
    ];
}
