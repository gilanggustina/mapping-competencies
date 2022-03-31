<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class WhiteTagModel extends Model
{
    protected $table = 'white_tag';
    protected $fillable = [
        'id_curriculum', 'id_user', 'id_training_module', 'start', 'actual', 'target'
    ];
    public $timestamps = false;

}
