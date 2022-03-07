<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Yajra\Datatables\Datatables;
use App\User;

class MemberCG extends Controller
{
    public function index(Request $request)
    {
        return view('pages.admin.member-cg');
    }

    public function cgJson()
    {
        $data = User::latest()->get();
        return Datatables::of($data)
            ->addIndexColumn()
            ->addColumn('action', function ($row) {
                $btn = '<a href="javascript:void(0)" data-toggle="tooltip"  data-id="' . $row->id . '" data-original-title="Edit" class="edit btn btn-primary btn-sm editItem">Edit</a>';
                $btn = $btn . '<a href="javascript:void(0)" data-toggle="tooltip" data-toggle="modal" data-target="#modal-hapus"  data-id="' . $row->id . '" data-original-title="Delete" class="btn btn-danger btn-sm delete-button">Delete</a>';
                return $btn;
            })
            ->addIndexColumn()
            ->rawColumns(['action'])
            ->make(true);
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama_pengguna' => 'required',
            'email' => 'email|required',
            'tgl_masuk' => 'required',
            'gambar' => 'required|image|mimes:jpg,png,jpeg|max:5000',
        ]);
        $data = [
            'nama_pengguna' => $request->nama_pengguna,
            'judul_berita' => $request->judul_berita,
            'tgl_masuk' => date('Y-m-d', strtotime($request->tanggal)),
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
        $berita = ManajemenBerita::create($data);
        return redirect()->route('manajemen-berita')->with('success', 'Berhasil menambah Berita!');
    }

    public function edit(Request $request)
    {
        $berita = ManajemenBerita::where('id', $request->id)->first();
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
        $berita = ManajemenBerita::find($id);
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
        $berita = ManajemenBerita::find($id);
        $image_path = 'assets/img/' . $berita->gambar;
        if (file_exists($image_path)) {
            @unlink($image_path);
        }
        $berita->delete();
        return redirect()
            ->route('manajemen-berita')
            ->with('success', 'Berhasil menghapus Berita!');
    }
}
