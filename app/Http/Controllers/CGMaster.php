<?php

namespace App\Http\Controllers;

use App\CG;
use Illuminate\Http\Request;

class CGMaster extends Controller
{
    public function index()
    {
        $data = CG::get();
        return view('pages.admin.cg.index', compact('data'));
    }
}
