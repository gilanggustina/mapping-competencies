<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Curriculum extends Controller
{
    public function index()
    {
        return view('pages.admin.curriculum');
    }
}
