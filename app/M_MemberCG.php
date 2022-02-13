<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class M_MemberCG extends Model
{
    protected $table = 'user';
    protected $primaryKey = 'id_user';
    protected $fillable = array('*');
}
