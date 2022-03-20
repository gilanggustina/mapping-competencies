<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SubDepartment extends Model
{
    protected $table = 'sub_department';
    protected $fillable = [
        'id_subdepartment', 'nama_subdepartment', 'id_department', 'created_at', 'updated_at'
    ];
}
