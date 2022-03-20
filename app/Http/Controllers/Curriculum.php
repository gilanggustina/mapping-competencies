<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\CurriculumModel;
use App\SkillCategory;

class Curriculum extends Controller
{
    public function index()
    {
        $data = CurriculumModel::all();
        return view('pages.admin.curriculum', compact('data'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'no_training_module' => 'required|max:255',
            'id_skill_category' => 'required',
            'training_module' => 'required',
            'level' => 'required',
            'training_module_group' => 'required',
            'training_module_desc' => 'required',
            // 'id_job_title	' => 'required',
        ]);

        $post = CurriculumModel::updateOrCreate(['id' => $request->id], [
            'title' => $request->title,
            'description' => $request->description
        ]);

        return response()->json(['code' => 200, 'message' => 'Post Created successfully', 'data' => $post], 200);
    }
    public function show($id)
    {
        $post = CurriculumModel::find($id);
        return response()->json($post);
    }

    public function destroy($id)
    {
        $post = CurriculumModel::find($id)->delete();
        return response()->json(['success' => 'Post Deleted successfully']);
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
