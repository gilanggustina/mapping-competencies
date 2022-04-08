<?php

namespace App\Http\Controllers;

use App\SkillCategoryModel;
use Illuminate\Http\Request;

class SkillCategory extends Controller
{
    public function index()
    {
        $data = SkillCategoryModel::all();
        return view('pages.admin.skill-category.index', compact('data'));
    }

    public function FormEditSkillCategory(Request $request)
    {
        $skill_category = SkillCategoryModel::where("id_skill_category", $request->id)->first();
        $skills = SkillCategoryModel::all();
        return view("pages.admin.skill-category.form", compact("skill_category", "skills", "jabatans"));
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'no_training_module' => 'required|max:100',
            'id_skill_category' => 'required',
            'training_module' => 'required',
            'level' => 'required',
            'training_module_group' => 'required',
            'training_module_desc' => 'required',
            'id_job_title' => 'required|array',
            'id_job_title.*' => 'required|string'
        ]);

        if ($validator->fails()) {
            return response()->json(['code' => 422, 'message' => 'The given data was invalid.', 'data' => $validator->errors()], 422);
        } else {
            DB::beginTransaction();
            try {
                if (isset($request->id_job_title) && count($request->id_job_title) > 0) {
                    $insert = [];
                    for ($i = 0; $i < count($request->id_job_title); $i++) {
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
                    SkillCategoryModel::insert($insert);
                }
                DB::commit();
                return response()->json(['code' => 200, 'message' => 'Post Created successfully'], 200);
            } catch (\Exception $e) {
                return response()->json(['code' => 422, 'message' => $e->getMessage()], 422);
            }
        }
    }

    public function editSkillCategory(Request $request)
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
        $post = SkillCategoryModel::updateOrCreate(['id_skill_category' => $request->id_skill_category], [
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

    // public function show($id)
    // {
    //     $post = skill_categoryModel::find($id);
    //     return response()->json($post);
    // }
    public function delete($id)
    {
        $post = SkillCategoryModel::where('id_skill_category', $id)->delete();
        return redirect()->route('skill_category')->with(['success' => 'skill_category Deleted successfully']);
    }
}
