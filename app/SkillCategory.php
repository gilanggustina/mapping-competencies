<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SkillCategory extends Model
{
    protected $table = 'skill_category';
    protected $fillable = [
        'id', 'skill_category'
    ];
}
