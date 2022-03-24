<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WhiteTag extends Controller
{
    public function index(Request $request)
    {
        return view('pages.admin.white-tag');
    }

    public function functional(Request $request)
    {
        return view('pages.admin.white-tag-functional');
    }
}
