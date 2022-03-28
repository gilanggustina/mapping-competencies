<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\CurriculumModel;
use App\SkillCategory;

class Curriculum extends Controller
{
    public function index()
    {
        $data = CurriculumModel::leftJoin('skill_category as sc', 'curriculum.id_skill_category', '=', 'sc.id_skill_category')
        ->leftJoin('job_title as jt', 'curriculum.id_job_title', '=', 'jt.id_job_title')
        ->get(['curriculum.*', 'jt.nama_job_title', 'sc.skill_category']);
        return view('pages.admin.curriculum', compact('data'));
    }

    public function store(Request $request)
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
        $post = CurriculumModel::find($id)->delete();
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
