<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Tagging extends Controller
{
    public function index()
    {
        return view('pages.admin.tagging');
    }
}
