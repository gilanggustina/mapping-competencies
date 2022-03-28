<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\WhiteTagModel;
use App\CompetenciesDirectoryModel;
use Validator;
use DB;
use Yajra\Datatables\Datatables;
use Auth;



class WhiteTag extends Controller
{
    public function cgJson(Request $request)
    {   
        $cgAuth = Auth::user()->id_cg;
        $data = User::leftJoin('department as dp', 'users.id_department', '=', 'dp.id_department')
            ->leftJoin('job_title as jt', 'users.id_job_title', '=', 'jt.id_job_title')
            ->join('cg',function ($join) use ($cgAuth){
                $join->on('users.id_cg','cg.id_cg')
                    ->where('users.id_cg',$cgAuth);
            })
            ->leftJoin('divisi', 'users.id_divisi', '=', 'divisi.id_divisi')
            ->get(['users.*', 'dp.nama_department', 'jt.nama_job_title','cg.nama_cg','divisi.nama_divisi']);
        return Datatables::of($data)
            ->addIndexColumn()
            ->addColumn('action', function ($row) {
            $btn = '<button data-id="' . $row->id . '" onclick="getMapComp('.$row->id.')" class="button-add btn btn-inverse-success btn-icon mr-1" data-toggle="modal" data-target="#modal-tambah"><i class="icon-plus menu-icon"></i></button>';
            $btn = $btn . '<button type="button" onclick="detailWhiteTag('.$row->id.')" class="btn btn-inverse-info btn-icon" data-toggle="modal" data-target="#modal-detail"><i class="ti-eye"></i></button>';
                return $btn;
            })
            ->addIndexColumn()
            ->rawColumns(['action'])
            ->make(true);
    }

    public function index(Request $request)
    {
        return view('pages.admin.white-tag');
    }

    public function formWhiteTag(Request $request)
    {
        $validator = Validator::make($request->all(),[
            "id" => "requeired|numeric",
            "type" => "required|string|in:functional,general"
        ]);
        $type = $request->type;
        $user = User::select("id","id_job_title")->where("id",$request->id)->first();
        if($request->type == "general"){
            $skillId = [1,2,3];
        }else{
            $skillId = [4,5];
        }
        
        $comps = CompetenciesDirectoryModel::select("competencies_directory.id_directory as id_directory","curriculum.no_training_module as no_training","curriculum.training_module as training_module","curriculum.training_module_group as training_module_group","curriculum.level as level","skill_category.skill_category as skill_category","white_tag.start as start","white_tag.actual as actual","competencies_directory.target as target")
                                            ->join("curriculum",function ($join) use ($user,$skillId){
                                                $join->on("curriculum.id_curriculum","competencies_directory.id_curriculum")
                                                    ->where("competencies_directory.id_job_title",$user->id_job_title)
                                                    ->whereIn("id_skill_category",$skillId);
                                            })
                                            ->join("skill_category","skill_category.id_skill_category","curriculum.id_skill_category")
                                            ->leftJoin("white_tag",function ($join) use ($user){
                                                $join->on("white_tag.id_directory","competencies_directory.id_directory")
                                                    ->where("white_tag.id_user",$user->id);
                                            })
                                            ->get();
        return view("pages.admin.white-tag.form",compact('comps','user','type'));
    }

    public function actionWhiteTag(Request $request)
    {
        $validator = Validator::make($request->all(),[
            "type" => "required|string|in:general,functional",
            "user_id" => "required|numeric",
            "data" => "nullable|array",
            "data.*.id" => "required|numeric",
            "data.*.start" => "required|numeric",
            "data.*.actual" => "required|numeric"
        ]);

        if($validator->fails()){
            dd($validator->errors());

        }else{
            DB::beginTransaction();
            try{
                if($request->type == "general"){
                    $skillId = [1,2,3];
                }else{
                    $skillId = [4,5];
                }
                WhiteTagModel::where("id_user",$request->user_id)
                    ->join("competencies_directory",function ($join) use ($skillId){
                        $join->on('competencies_directory.id_directory','white_tag.id_directory')
                            ->join('curriculum','curriculum.id_curriculum','competencies_directory.id_curriculum')
                            ->whereIn('curriculum.id_skill_category',$skillId);
                    })
                    ->delete();
                if(isset($request->data)){
                    $insert = [];
                    for($i=0; $i < count($request->data); $i++){
                        $insert[$i] = [
                            "id_white_tag"=>$this->random_string(5,5,false).time(),
                            "id_directory" => $request->data[$i]["id"],
                            "id_user" => $request->user_id,
                            "start" => $request->data[$i]["start"],
                            "actual" => $request->data[$i]["actual"]
                        ];
                    }
                    WhiteTagModel::insert($insert);
                }
                DB::commit();
                $messages = [
                    "type"=>"success",
                    "message"=>"Berhasil mengubah data white tag!"
                ];
            }catch(\Exception $e){
                DB::rollback();
                dd($e->getMessage());
                $messages = [
                    "type"=>"error",
                    "message"=>"Terjadi kesalahan dalam penyimpanan data"
                ];
            }
            if($request->type == "general"){
                return redirect()
                ->route('WhiteTag')
                ->with($messages["type"], $messages["message"]);
            }else{
                return redirect()
                ->route('WhiteTagFunc')
                ->with($messages["type"], $messages["message"]);
            }
        }
    }

    public function detailWhiteTag(Request $request)
    {
        $user = User::select("id","id_job_title")->where("id",$request->id)->first();
        if($request->type == "general"){
            $skillId = [1,2,3];
        }else{
            $skillId = [4,5];
        }
        $data = CompetenciesDirectoryModel::select("curriculum.no_training_module as no_training","curriculum.training_module as training_module","curriculum.training_module_group as training_module_group","curriculum.level as level","skill_category.skill_category as skill_category","white_tag.start as start","white_tag.actual as actual","competencies_directory.target as target",)
                                            ->join("curriculum",function ($join) use ($user,$skillId){
                                                $join->on("curriculum.id_curriculum","competencies_directory.id_curriculum")
                                                    ->where("competencies_directory.id_job_title",$user->id_job_title)
                                                    ->whereIn("id_skill_category",$skillId);
                                            })
                                            ->join("skill_category","skill_category.id_skill_category","curriculum.id_skill_category")
                                            ->leftJoin("white_tag",function ($join) use ($user){
                                                $join->on("white_tag.id_directory","competencies_directory.id_directory")
                                                    ->where("white_tag.id_user",$user->id);
                                            })
                                            ->get();
        return Datatables::of($data)
        ->addIndexColumn()
        ->editColumn('start', function ($row) {
            switch($row->start){
                case 0:
                    $icon = '<div style="width:50px;heigth:50px" class="mx-auto"><img class="img-thumbnail mx-auto" src="'.asset('theme/images/ico/logo-map.png').'"></div>';
                break;
                case 1:
                    $icon = '<div style="width:50px;heigth:50px" class="mx-auto"><img class="img-thumbnail mx-auto" src="'.asset('theme/images/ico/logo-map.png').'"></div>';
                break;
                case 2:
                    $icon = '<div style="width:50px;heigth:50px" class="mx-auto"><img class="img-thumbnail mx-auto" src="'.asset('theme/images/ico/logo-map.png').'"></div>';
                break;
                case 3:
                    $icon = '<div style="width:50px;heigth:50px" class="mx-auto"><img class="img-thumbnail mx-auto" src="'.asset('theme/images/ico/logo-map.png').'"></div>';
                break;
                case 4:
                    $icon = '<div style="width:50px;heigth:50px" class="mx-auto"><img class="img-thumbnail mx-auto" src="'.asset('theme/images/ico/logo-map.png').'"></div>';
                break;
                case 5:
                    $icon = '<div style="width:50px;heigth:50px" class="mx-auto"><img class="img-thumbnail mx-auto" src="'.asset('theme/images/ico/logo-map.png').'"></div>';
                break;
                    
            }
            return $icon;
        })
        ->editColumn('actual', function ($row) {
            switch($row->start){
                case 0:
                    $icon = '<div style="width:50px;heigth:50px" class="mx-auto"><img class="img-thumbnail mx-auto" src="'.asset('theme/images/ico/logo-map.png').'"></div>';
                break;
                case 1:
                    $icon = '<div style="width:50px;heigth:50px" class="mx-auto"><img class="img-thumbnail mx-auto" src="'.asset('theme/images/ico/logo-map.png').'"></div>';
                break;
                case 2:
                    $icon = '<div style="width:50px;heigth:50px" class="mx-auto"><img class="img-thumbnail mx-auto" src="'.asset('theme/images/ico/logo-map.png').'"></div>';
                break;
                case 3:
                    $icon = '<div style="width:50px;heigth:50px" class="mx-auto"><img class="img-thumbnail mx-auto" src="'.asset('theme/images/ico/logo-map.png').'"></div>';
                break;
                case 4:
                    $icon = '<div style="width:50px;heigth:50px" class="mx-auto"><img class="img-thumbnail mx-auto" src="'.asset('theme/images/ico/logo-map.png').'"></div>';
                break;
                case 5:
                    $icon = '<div style="width:50px;heigth:50px" class="mx-auto"><img class="img-thumbnail mx-auto" src="'.asset('theme/images/ico/logo-map.png').'"></div>';
                break;
                    
            }
            return $icon;
        })
        ->editColumn('target', function ($row) {
            switch($row->start){
                case 0:
                    $icon = '<div style="width:50px;heigth:50px" class="mx-auto"><img class="img-thumbnail mx-auto" src="'.asset('theme/images/ico/logo-map.png').'"></div>';
                break;
                case 1:
                    $icon = '<div style="width:50px;heigth:50px" class="mx-auto"><img class="img-thumbnail mx-auto" src="'.asset('theme/images/ico/logo-map.png').'"></div>';
                break;
                case 2:
                    $icon = '<div style="width:50px;heigth:50px" class="mx-auto"><img class="img-thumbnail mx-auto" src="'.asset('theme/images/ico/logo-map.png').'"></div>';
                break;
                case 3:
                    $icon = '<div style="width:50px;heigth:50px" class="mx-auto"><img class="img-thumbnail mx-auto" src="'.asset('theme/images/ico/logo-map.png').'"></div>';
                break;
                case 4:
                    $icon = '<div style="width:50px;heigth:50px" class="mx-auto"><img class="img-thumbnail mx-auto" src="'.asset('theme/images/ico/logo-map.png').'"></div>';
                break;
                case 5:
                    $icon = '<div style="width:50px;heigth:50px" class="mx-auto"><img class="img-thumbnail mx-auto" src="'.asset('theme/images/ico/logo-map.png').'"></div>';
                break;
                    
            }
            return $icon;
        })
            
        ->addIndexColumn()
        ->rawColumns(['start','actual','target'])
        ->make(true);
        
    }

    public function functional(Request $request)
    {
        return view('pages.admin.white-tag-functional');
    }
}
