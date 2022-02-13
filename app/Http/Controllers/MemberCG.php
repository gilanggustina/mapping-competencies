<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MemberCG extends Controller
{
    public function index()
    {
        $user = DB::table('user')
            // ->join('department', 'user.id_department', '=', 'department.id_department')
            ->get();
        // ->all();
        // dd($user);
        return view('pages.admin.member-cg', compact('user'));
    }
}
