<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Level extends Model
{
    protected $table = 'level';
    protected $fillable = [
        'id_level', 'nama_level', 'created_at', 'updated_at'
    ];
}
