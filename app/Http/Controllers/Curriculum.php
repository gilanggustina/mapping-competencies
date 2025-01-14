<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\CurriculumModel;
use App\SkillCategoryModel;
use App\Jabatan;
use App\CurriculumToJob;
use Validator;
use DB;

class Curriculum extends Controller
{
    public function index()
    {
        $data = CurriculumModel::leftJoin('skill_category as sc', 'curriculum.id_skill_category', '=', 'sc.id_skill_category')
        ->get(['curriculum.*', 'sc.skill_category',DB::raw("(SELECT GROUP_CONCAT(nama_job_title SEPARATOR ', ') FROM curriculum_to_job AS ctb JOIN job_title AS jt ON jt.id_job_title = ctb.id_job_title WHERE ctb.id_curriculum = curriculum.id_curriculum GROUP BY ctb.id_curriculum ) AS job_title")]);
        // dd($data);
        return view('pages.admin.curriculum.index', compact('data'));
    }

    public function getFormEditCurriculum(Request $request)
    {
        $curriculum = CurriculumModel::where("id_curriculum",$request->id)->first();
        // $curriculumToJob = CurriculumToJob::where
        $skills = SkillCategoryModel::all();
        $jabatans = Jabatan::select("job_title.id_job_title","nama_job_title",DB::raw("IF(id_ctb IS NULL,0,1) as sts"))
                            ->leftJoin("curriculum_to_job as ctb",function ($join) use ($request){
                                $join->on("ctb.id_job_title","job_title.id_job_title")
                                    ->where("ctb.id_curriculum",$request->id);
                            })->get();
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
            $data = $this->validate_input_v2($request);
            DB::beginTransaction();
            try {
                if(isset($request->id_job_title) && count($request->id_job_title) > 0){
                    $curriculum = new CurriculumModel;
                    $curriculum->no_training_module = $request->no_training_module;
                    $curriculum->id_skill_category = $request->id_skill_category;
                    $curriculum->training_module = $request->training_module;
                    $curriculum->level = $request->level;
                    $curriculum->training_module_group = $request->training_module_group;
                    $curriculum->training_module_desc = $request->training_module_desc;
                    $curriculum->save();
                    $insert = [];
                    for($i = 0;$i < count($request->id_job_title);$i++){
                        $insert[$i] = [
                            'id_curriculum' => $curriculum->id,
                            'id_job_title' => $request->id_job_title[$i]
                        ];
                    }
                    if(count($insert) > 0){
                        CurriculumToJob::insert($insert);
                    }

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
            'id_job_title' => 'required|array',
        ]);
        CurriculumModel::where("id_curriculum",$request->id_curriculum)->update([
            'no_training_module' => $request->no_training_module,
            'id_skill_category' => $request->id_skill_category,
            'training_module' => $request->training_module,
            'level' => $request->level,
            'training_module_group' => $request->training_module_group,
            'training_module_desc' => $request->training_module_desc
        ]);
        $jobTitleId = [];
        for($i = 0; $i < count($request->id_job_title); $i++){
            array_push($jobTitleId,$request->id_job_title[$i]); 
            CurriculumToJob::updateOrCreate(['id_curriculum'=>$request->id_curriculum,"id_job_title"=>$request->id_job_title[$i]]);
        }
        DB::commit();
        if(count($jobTitleId) > 0){
            CurriculumToJob::where("id_curriculum",$request->id_curriculum)->whereNotIn("id_job_title",$jobTitleId)->delete();
        }
        
        return response()->json(['code' => 200, 'message' => 'Post Created successfully'], 200);
    }

    public function show($id)
    {
        $post = CurriculumModel::find($id);
        return response()->json($post);
    }
    public function delete($id)
    {
        CurriculumModel::where('id_curriculum', $id)->delete();
        CurriculumToJob::where("id_curriculum",$id)->delete();
        return redirect()->route('Curriculum')->with(['success' => 'Curriculum Deleted successfully']);
    }

    public function getSkill()
    {
        $skill = SkillCategoryModel::all();
        return response()->json([
            'data' => $skill,
            'status' => 200,
            'success' => true,
        ]);
    }

}
