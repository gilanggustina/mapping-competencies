<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Jabatan extends Model
{
    protected $table = 'job_title';
    protected $fillable = [
        'id_job_title', 'id_department', 'nama_job_title', 'created_at', 'updated_at'
    ];
}
