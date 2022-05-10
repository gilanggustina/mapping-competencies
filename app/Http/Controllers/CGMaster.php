<?php

namespace App\Http\Controllers;

use App\CG;
use Illuminate\Http\Request;

class CGMaster extends Controller
{
    public function index()
    {
        $data = CG::leftJoin('department as dp', 'cg.id_department', '=', 'dp.id_department')
        ->get(['cg.id_cg', 'cg.nama_cg', 'dp.nama_department as dp']);
        return view('pages.admin.cg.index', compact('data'));
    }
}
