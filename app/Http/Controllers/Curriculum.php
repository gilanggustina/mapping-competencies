<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\CurriculumModel;
use App\SkillCategory;
use App\Jabatan;
use Validator;
use DB;

class Curriculum extends Controller
{
    public function index()
    {
        $data = CurriculumModel::leftJoin('skill_category as sc', 'curriculum.id_skill_category', '=', 'sc.id_skill_category')
        ->leftJoin('job_title as jt', 'curriculum.id_job_title', '=', 'jt.id_job_title')
        ->get(['curriculum.*', 'jt.nama_job_title', 'sc.skill_category']);
        return view('pages.admin.curriculum.index', compact('data'));
    }

    public function getFormEditCurriculum(Request $request)
    {
        $curriculum = CurriculumModel::where("id_curriculum",$request->id)->first();
        $skills = SkillCategory::all();
        $jabatans = Jabatan::all();
        return view("pages.admin.curriculum.form",compact("curriculum","skills","jabatans"));
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(),[
            'no_training_module' => 'required|max:100',
            'id_skill_category' => 'required',
            'training_module' => 'required',
            'level' => 'required',
            'training_module_group' => 'required',
            'training_module_desc' => 'required',
            'id_job_title' => 'required|array',
            'id_job_title.*' => 'required|string'
        ]);

        if($validator->fails()){
            return response()->json(['code' => 422, 'message' => 'The given data was invalid.', 'data' => $validator->errors()], 422);
        }else{
            DB::beginTransaction();
            try {
                if(isset($request->id_job_title) && count($request->id_job_title) > 0){
                    $insert = [];
                    for($i = 0;$i < count($request->id_job_title);$i++){
                        $insert[$i] = [
                            'no_training_module' => $request->no_training_module,
                            'id_skill_category' => $request->id_skill_category,
                            'training_module' => $request->training_module,
                            'level' => $request->level,
                            'training_module_group' => $request->training_module_group,
                            'training_module_desc' => $request->training_module_desc,
                            'id_job_title' => $request->id_job_title[$i]
                        ];
                    }
                    CurriculumModel::insert($insert);
                }
                DB::commit();
                return response()->json(['code' => 200, 'message' => 'Post Created successfully'], 200);
            } catch (\Exception $e) {
                return response()->json(['code' => 422, 'message' => $e->getMessage()], 422);
            }
        }
    }

    public function editCurriculum(Request $request)
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

    public function show($id)
    {
        $post = CurriculumModel::find($id);
        return response()->json($post);
    }
    public function delete($id)
    {
        $post = CurriculumModel::where('id_curriculum', $id)->delete();
        return redirect()->route('Curriculum')->with(['success' => 'Curriculum Deleted successfully']);
    }

    public function getSkill()
    {
        $skill = SkillCategory::all();
        return response()->json([
            'data' => $skill,
            'status' => 200,
            'success' => true,
        ]);
    }

}
