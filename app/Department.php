<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Department extends Model
{
    protected $table = 'department';
    protected $fillable = [
        'id_department', 'id_divisi', 'nama_department'
    ];
}
