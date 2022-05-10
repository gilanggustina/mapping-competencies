<?php

namespace App\Http\Controllers;

use App\Jabatan;
use Illuminate\Http\Request;

class JabatanController extends Controller
{
    public function get()
    {
        $items = Jabatan::orderBy('nama_job_title')->get();
        return response()->json($items);
    }
}
