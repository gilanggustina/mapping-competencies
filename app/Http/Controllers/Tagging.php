<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Tagging extends Controller
{
    public function taglist()
    {
        return view('pages.admin.tag-list');
    }

    public function tagcard()
    {
        return view('pages.admin.tag-card');
    }
}
