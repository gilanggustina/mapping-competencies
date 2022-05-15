<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SkillCategoryModel extends Model
{
    protected $table = 'skill_category';
    protected $fillable = [
        'id', 'skill_category'
    ];
    public $timestamps = false;
}
