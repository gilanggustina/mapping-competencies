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
use Validator;
use Illuminate\Support\Facades\Auth;

class MemberCG extends Controller
{
    public function index(Request $request)
    {
        return view('pages.admin.member.index');
    }

    public function cgJson()
    {
        $data = User::leftJoin('department as dp', 'users.id_department', '=', 'dp.id_department')
            ->leftJoin('job_title as jt', 'users.id_job_title', '=', 'jt.id_job_title')
            ->get(['users.*', 'dp.nama_department', 'jt.nama_job_title']);
        return Datatables::of($data)
            ->addIndexColumn()
            ->addColumn('action', function ($row) {
            $btn = '<button data-id="' . $row->id . '" class="btn btn-inverse-success btn-icon mr-1" data-toggle="modal" data-target="#modal-tambah"><i class="icon-file menu-icon"></i></button>';
            $btn = $btn . '<button data-id="' . $row->id . '" class="btn btn-inverse-danger btn-icon member-hapus mr-1" data-toggle="modal" data-target="#modal-hapus"><i class="icon-trash"></i></button>';
            $btn = $btn . '<button type="button" class="btn btn-inverse-info btn-icon" data-toggle="modal" data-target="#modal-detail"><i class="ti-eye"></i></button>';
                return $btn;
            })
            ->addIndexColumn()
            ->rawColumns(['action'])
            ->make(true);
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
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
            // 'gambar' => 'required|image|mimes:jpg,png,jpeg|max:5000',
        ]);
        if ($validator->fails()) {
            return response()->json(['code' => 422, 'message' => 'The given data was invalid.', 'data' => $validator->errors()], 422);
        } else {
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
            // if ($request->hasFile('gambar')) {
            //     $file = $request->file('gambar');
            //     $extension = $file->getClientOriginalExtension();
            //     $filename = time() . '.' . $extension;
            //     $file->move('assets/img/', $filename);
            //     $data['gambar'] = $filename;
            // } else {
            //     $data['gambar'] = 'no_image.jpg';
            // }
            $data = User::create($data);
            $data->save();
            // Alert::success('Congrats', 'Data Berhasil di tambahkan');
            return redirect()->route('Member')->with('success', 'Berhasil menambah Berita!');
        }
    }

    public function edit(Request $request)
    {
        $user = User::where("id_user", $request->id)->first();
        // $skills = SkillCategory::all();
        // $jabatans = Jabatan::all();
        return view("pages.admin.member.form", compact("user"));
    }

    public function update(Request $request)
    {
        $request->validate([
            'no_training_module' => 'required|max:100',
            'id_skill_category' => 'required',
            'training_module' => 'required',
            'level' => 'required',
            'training_module_group' => 'required',
            'training_module_desc' => 'required',
            'id_job_title' => 'required',
        ]);
        $post = CurriculumModel::updateOrCreate(['id_curriculum' => $request->id_curriculum], [
            'no_training_module' => $request->no_training_module,
            'id_skill_category' => $request->id_skill_category,
            'training_module' => $request->training_module,
            'level' => $request->level,
            'training_module_group' => $request->training_module_group,
            'training_module_desc' => $request->training_module_desc,
            'id_job_title' => $request->id_job_title,
        ]);

        return response()->json(['code' => 200, 'message' => 'Post Created successfully', 'data' => $post], 200);
    }

    public function delete($id)
    {
        $membercg = User::find($id);
        $membercg->delete();
        return redirect()
            ->route('Member')
            ->with('success', 'Berhasil menghapus member!');
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

    public function getJabatan()
    {
        $provinsi = Jabatan::all();
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
