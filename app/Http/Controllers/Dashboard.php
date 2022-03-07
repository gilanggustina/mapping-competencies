<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\User;

class Dashboard extends Controller
{
    public function index()
    {
        $cg = Auth::user()->id_cg;
        $cg = User::where('id_cg', $cg)->first();
        return view('pages.admin.dashboard', compact('cg'));
    }
}
