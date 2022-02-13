<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Ceme extends Controller
{
    public function index()
    {
        return view('pages.admin.ceme');
    }
}
