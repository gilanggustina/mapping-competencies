<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\User;
use Illuminate\Support\Facades\DB;

class Dashboard extends Controller
{
    public function index()
    {
        // $dash = User::leftJoin('department as dp', 'users.id_department', '=', 'dp.id_department')
        //     ->leftJoin('job_title as jt', 'users.id_job_title', '=', 'jt.id_job_title')
        //     ->where('id', Auth::user()->id)
        //     ->get(['users.*', 'dp.nama_department', 'jt.nama_job_title']);
        // $dash = json_encode($dash);

        $email = Auth::user()->email;
        $cg = Auth::user()->id_cg;

        $data = User::leftJoin('department as dp', 'users.id_department', '=', 'dp.id_department')
            ->leftJoin('job_title as jt', 'users.id_job_title', '=', 'jt.id_job_title')
            ->leftJoin('cg as cg', 'users.id_cg', '=', 'cg.id_cg')
            ->whereEmail($email)->first(['users.*', 'dp.nama_department', 'jt.nama_job_title', 'cg.nama_cg']);

        $jumlah = DB::table('users')
            ->select(array('users.*', DB::raw('COUNT(id_cg) as cg')))
            ->where('id_cg', '=', $cg)
            ->groupBy('id_cg')
            ->get();
        return view('pages.admin.dashboard', compact('data', 'jumlah'));
    }

    public function card_profile()
    {
        $cg = Auth::user()->id_cg;

        $profile = User::leftJoin('department as dp', 'users.id_department', '=', 'dp.id_department')
            ->leftJoin('job_title as jt', 'users.id_job_title', '=', 'jt.id_job_title')
            ->where('id_cg', $cg)
        ->get(['users.*', 'dp.*', 'jt.*']);
        return response()->json([
            'data' => $profile,
            'status' => 200,
            'success' => true,
        ]);
    }
}
