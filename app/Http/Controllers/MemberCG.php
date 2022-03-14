<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Yajra\Datatables\Datatables;
use App\User;
use App\Divisi;
use App\Jabatan;
use App\CG;
use App\Level;
use App\SubDepartment;
use App\Department;
use Illuminate\Support\Facades\Auth;

class MemberCG extends Controller
{
    public function index(Request $request)
    {
        return view('pages.admin.member-cg');
    }

    public function cgJson()
    {
        $data = User::leftJoin('department as dp', 'users.id_department', '=', 'dp.id_department')
            ->leftJoin('job_title as jt', 'users.id_job_title', '=', 'jt.id_job_title')
            ->get(['users.*', 'dp.nama_department', 'jt.nama_job_title']);
        return Datatables::of($data)
            ->addIndexColumn()
            ->addColumn('action', function ($row) {
                $btn = '<a href="javascript:void(0)" data-toggle="tooltip"  data-id="' . $row->id . '" data-original-title="Edit" class="edit btn btn-primary mr-1 Edit-button"><i class="icon-align-left menu-icon"></i></a>';
                $btn = $btn . '<a href="javascript:void(0)" data-toggle="tooltip" data-toggle="modal" data-target="#modal-hapus"  data-id="' . $row->id . '" class="btn btn-danger mr-1 delete-button"><i class="icon-trash"></i></a>';
                $btn = $btn . '<a href="javascript:void(0)" data-toggle="tooltip" data-toggle="modal" data-target="#modal-detail"  data-id="' . $row->id . '" data-original-title="Detail" class="btn btn-info detail-button"><i class="icon-eye"></i></a>';
                return $btn;
            })
            ->addIndexColumn()
            ->rawColumns(['action'])
            ->make(true);
    }

    public function store(Request $request)
    {
        $request->validate([
            'nik' => 'required',
            'password' => 'required',
            'peran_pengguna' => 'required',
            'tgl_masuk' => 'required',
            'nama_pengguna' => 'required',
            'email' => 'email|required',
            'divisi' => 'required',
            'job_title' => 'required',
            'level' => 'required',
            'department' => 'required',
            'sub_department' => 'required',
            'cg' => 'required',
            'gambar' => 'required|image|mimes:jpg,png,jpeg|max:5000',
        ]);
        $data = [
            'nik' => $request->nik,
            'password' => $request->password,
            'peran_pengguna' => $request->peran_pengguna,
            'tgl_masuk' => date('Y-m-d', strtotime($request->tanggal)),
            'nama_pengguna' => $request->nama_pengguna,
            'email' => $request->email,
            'id_divisi' => $request->divisi,
            'id_job_title' => $request->job_title,
            'id_level' => $request->level,
            'id_department' => $request->department,
            'id_sub_department' => $request->sub_department,
            'id_cg' => $request->cg,
        ];
        if ($request->hasFile('gambar')) {
            $file = $request->file('gambar');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $file->move('assets/img/', $filename);
            $data['gambar'] = $filename;
        } else {
            $data['gambar'] = 'no_image.jpg';
        }
        User::create($data);
        return redirect()->route('Member')->with('success', 'Berhasil menambah Berita!');
    }

    public function edit(Request $request)
    {
        $berita = User::where('id', $request->id)->first();
        return response()->json([
            'status' => true,
            'data' => $berita,
            'message' => 'success',
        ]);
    }
    public function update($id, Request $request)
    {
        $request->validate([
            'judul_berita' => 'required',
            'tanggal' => 'required',
            'link' => 'required',
        ]);
        $data = [
            'id_user' => Auth::user()->id,
            'id_prov' => Auth::user()->id_provinsi,
            'id_kab' => Auth::user()->id_kab,
            'judul_berita' => $request->judul_berita,
            'tanggal' => $request->tanggal,
            'link' => $request->link,
        ];
        $berita = User::find($id);
        if ($request->hasFile('gambar')) {
            $request->validate([
                'gambar' => 'required|image|mimes:jpg,png,jpeg|max:5000',
            ]);
            $image_path = 'assets/img/' . $berita->gambar;
            if (file_exists($image_path)) {
                @unlink($image_path);
            }
            $file = $request->file('gambar');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $file->move('assets/img/', $filename);
            $data['gambar'] = $filename;
        }
        $berita->update($data);
        return redirect()
            ->route('manajemen-berita')
            ->with('success', 'Berhasil mengubah Berita!');
    }
    public function delete($id)
    {
        $berita = User::find($id);
        $image_path = 'assets/img/' . $berita->gambar;
        if (file_exists($image_path)) {
            @unlink($image_path);
        }
        $berita->delete();
        return redirect()
            ->route('manajemen-berita')
            ->with('success', 'Berhasil menghapus Berita!');
    }

    public function getDivisi()
    {
        $provinsi = Divisi::all();
        return response()->json([
            'data' => $provinsi,
            'status' => 200,
            'success' => true,
        ]);
    }


    public function getLevel()
    {
        $provinsi = Level::all();
        return response()->json([
            'data' => $provinsi,
            'status' => 200,
            'success' => true,
        ]);
    }

    public function getDepartment()
    {
        $provinsi = Department::all();
        return response()->json([
            'data' => $provinsi,
            'status' => 200,
            'success' => true,
        ]);
    }

    public function getSubDepartment()
    {
        $provinsi = SubDepartment::all();
        return response()->json([
            'data' => $provinsi,
            'status' => 200,
            'success' => true,
        ]);
    }

    public function getLigaCG()
    {
        $provinsi = CG::all();
        return response()->json([
            'data' => $provinsi,
            'status' => 200,
            'success' => true,
        ]);
    }
}
