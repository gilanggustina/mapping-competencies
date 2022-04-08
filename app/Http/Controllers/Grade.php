<?php

namespace App\Http\Controllers;

use App\GradeModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class Grade extends Controller
{
    public function index()
    {
        $data = GradeModel::get();
        return view('pages.admin.grade.index', compact('data'));
    }

    public function getFormEditGrade(Request $request)
    {
        $grade = GradeModel::where("id_grade", $request->id)->first();
        return view("pages.admin.grade.form", compact("grade"));
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'id_grade' => 'required|max:100',
            'name_grade' => 'required',
        ]);

        if ($validator->fails()) {
            return response()->json(['code' => 422, 'message' => 'The given data was invalid.', 'data' => $validator->errors()], 422);
        } else {
            DB::beginTransaction();
            try {
                if (Auth::user()->peran_pengguna == 'Admin') {
                    // $grade = new GradeModel;
                    // $grade->no_training_module = $request->no_training_module;
                    // $grade->id_skill_category = $request->id_skill_category;
                    // $grade->training_module = $request->training_module;
                    // $grade->save();
                    $insert = [
                        'id_grade' => $request->id_grade,
                        'name_grade' => $request->name_grade,
                    ];
                    if (count($insert) > 0) {
                        GradeModel::insert($insert);
                    }
                }
                DB::commit();
                return response()->json(['code' => 200, 'message' => 'Post Created successfully'], 200);
            } catch (\Exception $e) {
                return response()->json(['code' => 422, 'message' => $e->getMessage()], 422);
            }
        }
    }

    public function editGrade(Request $request)
    {
        $request->validate([
            'id_grade' => 'required|max:100',
            'name_grade' => 'required',
        ]);
        GradeModel::where("id_grade", $request->id_grade)
            ->update([
                'id_grade' => $request->id_grade,
                'name_grade' => $request->name_grade,
            ]);
        // GradeModel::updateOrCreate(['id_grade' => $request->id_grade, "name_grade" => $request->id_name_grade]);
        DB::commit();

        return response()->json(['code' => 200, 'message' => 'Post Created successfully'], 200);
    }

    public function show($id)
    {
        $post = GradeModel::find($id);
        return response()->json($post);
    }
    public function delete($id)
    {
        GradeModel::where('id_grade', $id)->delete();
        return redirect()->route('grade')->with(['success' => 'Grade Deleted successfully']);
    }

}
