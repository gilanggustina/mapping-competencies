<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\WhiteTagModel;
use App\Exports\WhiteTagExport;
use Maatwebsite\Excel\Facades\Excel;
use App\CompetenciesDirectoryModel;
use Validator;
use DB;
use Yajra\Datatables\Datatables;
use Auth;



class WhiteTag extends Controller
{
    public function whiteTagJson(Request $request)
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

    public function whiteTagAll(Request $request)
    {
        $select = [
            "nama_pengguna","no_training_module","skill_category","training_module","level","training_module_group","start","actual","target"
        ];
        $data = WhiteTagModel::select($select)
                ->join("users","users.id","white_tag.id_user")
                ->join("competencies_directory AS cd","cd.id_directory","white_tag.id_directory")
                ->join("curriculum AS crclm","crclm.id_curriculum","cd.id_curriculum")
                ->join("skill_category AS sc","sc.id_skill_category","crclm.id_skill_category")
                ->where("white_tag.actual",">=","cd.target")
                ->get();
        return Datatables::of($data)
        ->addIndexColumn()
        ->editColumn('start', function ($row) {
            switch($row->start){
                case 0:
                    $icon = '<div style="width:50px;heigth:50px" title="'.$row->start.'" class="mx-auto"><img class="img-thumbnail mx-auto tooltip-info" src="'.asset('assets/images/point/0.png').'"></div>';
                break;
                case 1:
                    $icon = '<div style="width:50px;heigth:50px" title="'.$row->start.'" class="mx-auto"><img class="img-thumbnail mx-auto" src="'.asset('assets/images/point/1.png').'"></div>';
                break;
                case 2:
                    $icon = '<div style="width:50px;heigth:50px" title="'.$row->start.'" class="mx-auto"><img class="img-thumbnail mx-auto" src="'.asset('assets/images/point/2.png').'"></div>';
                break;
                case 3:
                    $icon = '<div style="width:50px;heigth:50px" title="'.$row->start.'" class="mx-auto"><img class="img-thumbnail mx-auto" src="'.asset('assets/images/point/3.png').'"></div>';
                break;
                case 4:
                    $icon = '<div style="width:50px;heigth:50px" title="'.$row->start.'" class="mx-auto"><img class="img-thumbnail mx-auto" src="'.asset('assets/images/point/4.png').'"></div>';
                break;
                case 5:
                    $icon = '<div style="width:50px;heigth:50px" title="'.$row->start.'" class="mx-auto"><img class="img-thumbnail mx-auto" src="'.asset('assets/images/point/5.png').'"></div>';
                break;
                    
            }
            return $icon;
        })
        ->editColumn('actual', function ($row) {
            switch($row->actual){
                case 0:
                    $icon = '<div style="width:50px;heigth:50px" title="'.$row->actual.'" class="mx-auto"><img class="img-thumbnail mx-auto" src="'.asset('assets/images/point/0.png').'"></div>';
                break;
                case 1:
                    $icon = '<div style="width:50px;heigth:50px" title="'.$row->actual.'" class="mx-auto"><img class="img-thumbnail mx-auto" src="'.asset('assets/images/point/1.png').'"></div>';
                break;
                case 2:
                    $icon = '<div style="width:50px;heigth:50px" title="'.$row->actual.'" class="mx-auto"><img class="img-thumbnail mx-auto" src="'.asset('assets/images/point/2.png').'"></div>';
                break;
                case 3:
                    $icon = '<div style="width:50px;heigth:50px" title="'.$row->actual.'" class="mx-auto"><img class="img-thumbnail mx-auto" src="'.asset('assets/images/point/3.png').'"></div>';
                break;
                case 4:
                    $icon = '<div style="width:50px;heigth:50px" title="'.$row->actual.'" class="mx-auto"><img class="img-thumbnail mx-auto" src="'.asset('assets/images/point/4.png').'"></div>';
                break;
                case 5:
                    $icon = '<div style="width:50px;heigth:50px" title="'.$row->actual.'" class="mx-auto"><img class="img-thumbnail mx-auto" src="'.asset('assets/images/point/5.png').'"></div>';
                break;
                    
            }
            return $icon;
        })
        ->editColumn('target', function ($row) {
            switch($row->target){
                case 0:
                    $icon = '<div style="width:50px;heigth:50px" title="'.$row->target.'" class="mx-auto"><img class="img-thumbnail mx-auto" src="'.asset('assets/images/point/0.png').'"></div>';
                break;
                case 1:
                    $icon = '<div style="width:50px;heigth:50px" title="'.$row->target.'" class="mx-auto"><img class="img-thumbnail mx-auto" src="'.asset('assets/images/point/1.png').'"></div>';
                break;
                case 2:
                    $icon = '<div style="width:50px;heigth:50px" title="'.$row->target.'" class="mx-auto"><img class="img-thumbnail mx-auto" src="'.asset('assets/images/point/2.png').'"></div>';
                break;
                case 3:
                    $icon = '<div style="width:50px;heigth:50px" title="'.$row->target.'" class="mx-auto"><img class="img-thumbnail mx-auto" src="'.asset('assets/images/point/3.png').'"></div>';
                break;
                case 4:
                    $icon = '<div style="width:50px;heigth:50px" title="'.$row->target.'" class="mx-auto"><img class="img-thumbnail mx-auto" src="'.asset('assets/images/point/4.png').'"></div>';
                break;
                case 5:
                    $icon = '<div style="width:50px;heigth:50px" title="'.$row->target.'" class="mx-auto"><img class="img-thumbnail mx-auto" src="'.asset('assets/images/point/5.png').'"></div>';
                break;
                    
            }
            return $icon;
        })
            
        ->addIndexColumn()
        ->rawColumns(['start','actual','target'])
        ->make(true);
    }

    public function exportWhiteTagAll()
    {
        $dateTime = date("d-m-Y H:i");        
        $fileName = "White Tag (".$dateTime.").xlsx";
        return Excel::download(new WhiteTagExport, $fileName);
        return redirect()->back();
    }

    public function index(Request $request)
    {
        return view('pages.admin.white-tag.index');
    }

    public function formWhiteTag(Request $request)
    {
        $validator = Validator::make($request->all(),[
            "id" => "requeired|numeric",
            "type" => "required|string|in:functional,general"
        ]);
        $type = $request->type;
        $user = User::select("id","id_job_title",DB::raw("(YEAR(NOW()) - YEAR(tgl_masuk)) AS tahun"))->where("id",$request->id)->first();
        $between = 0;
        if($user->tahun > 5){
            $between = 5;
        }else{
            $between = $user->tahun;
        }
        $select = [
            "competencies_directory.id_directory as id_directory","curriculum.no_training_module as no_training",
            "curriculum.training_module as training_module","curriculum.training_module_group as training_module_group",
            "curriculum.level as level","skill_category.skill_category as skill_category","white_tag.start as start",
            "white_tag.actual as actual","competencies_directory.target as target",
            DB::raw("(SELECT COUNT(*) FROM taging_reason as tr where tr.id_white_tag = white_tag.id_white_tag) as cntTagingReason")
        ];
        $comps = CompetenciesDirectoryModel::select($select)
                                            ->join("curriculum",function ($join) use ($user,$between){
                                                $join->on("curriculum.id_curriculum","competencies_directory.id_curriculum")
                                                    ->whereRaw("competencies_directory.id_job_title = '".$user->id_job_title."' AND competencies_directory.between_year = '".$between."'");
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
        $request->validate([
            "type" => "required|string|in:general,functional",
            "user_id" => "required|numeric",
            "data" => "nullable|array",
            "data.*.id" => "nullable|numeric",
            "data.*.start" => "nullable|numeric",
            "data.*.actual" => "nullable|numeric"
        ]);
        DB::beginTransaction();
        try{
            $skillId = [1,2];
            WhiteTagModel::whereRaw("id_user = '".$request->user_id."' AND (select count(*) from taging_reason where taging_reason.id_white_tag = white_tag.id_white_tag) <= 0 ")
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
        }catch(\Exception $e){
            DB::rollback();
        }
        return response()->json(['code' => 200, 'message' => 'Post successfully'], 200);
    }

    public function detailWhiteTag(Request $request)
    {
        $user = User::select("id","id_job_title")->where("id",$request->id)->first();
        $skillId = [1,2];
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
                                            ->groupBy("competencies_directory.id_curriculum")
                                            ->get();
        return Datatables::of($data)
        ->addIndexColumn()
        ->editColumn('start', function ($row) {
            switch($row->start){
                case 0:
                    $icon = '<div style="width:50px;heigth:50px" title="'.$row->start.'" class="mx-auto"><img class="img-thumbnail mx-auto tooltip-info" src="'.asset('assets/images/point/0.png').'"></div>';
                break;
                case 1:
                    $icon = '<div style="width:50px;heigth:50px" title="'.$row->start.'" class="mx-auto"><img class="img-thumbnail mx-auto" src="'.asset('assets/images/point/1.png').'"></div>';
                break;
                case 2:
                    $icon = '<div style="width:50px;heigth:50px" title="'.$row->start.'" class="mx-auto"><img class="img-thumbnail mx-auto" src="'.asset('assets/images/point/2.png').'"></div>';
                break;
                case 3:
                    $icon = '<div style="width:50px;heigth:50px" title="'.$row->start.'" class="mx-auto"><img class="img-thumbnail mx-auto" src="'.asset('assets/images/point/3.png').'"></div>';
                break;
                case 4:
                    $icon = '<div style="width:50px;heigth:50px" title="'.$row->start.'" class="mx-auto"><img class="img-thumbnail mx-auto" src="'.asset('assets/images/point/4.png').'"></div>';
                break;
                case 5:
                    $icon = '<div style="width:50px;heigth:50px" title="'.$row->start.'" class="mx-auto"><img class="img-thumbnail mx-auto" src="'.asset('assets/images/point/5.png').'"></div>';
                break;
                    
            }
            return $icon;
        })
        ->editColumn('actual', function ($row) {
            switch($row->actual){
                case 0:
                    $icon = '<div style="width:50px;heigth:50px" title="'.$row->actual.'" class="mx-auto"><img class="img-thumbnail mx-auto" src="'.asset('assets/images/point/0.png').'"></div>';
                break;
                case 1:
                    $icon = '<div style="width:50px;heigth:50px" title="'.$row->actual.'" class="mx-auto"><img class="img-thumbnail mx-auto" src="'.asset('assets/images/point/1.png').'"></div>';
                break;
                case 2:
                    $icon = '<div style="width:50px;heigth:50px" title="'.$row->actual.'" class="mx-auto"><img class="img-thumbnail mx-auto" src="'.asset('assets/images/point/2.png').'"></div>';
                break;
                case 3:
                    $icon = '<div style="width:50px;heigth:50px" title="'.$row->actual.'" class="mx-auto"><img class="img-thumbnail mx-auto" src="'.asset('assets/images/point/3.png').'"></div>';
                break;
                case 4:
                    $icon = '<div style="width:50px;heigth:50px" title="'.$row->actual.'" class="mx-auto"><img class="img-thumbnail mx-auto" src="'.asset('assets/images/point/4.png').'"></div>';
                break;
                case 5:
                    $icon = '<div style="width:50px;heigth:50px" title="'.$row->actual.'" class="mx-auto"><img class="img-thumbnail mx-auto" src="'.asset('assets/images/point/5.png').'"></div>';
                break;
                    
            }
            return $icon;
        })
        ->editColumn('target', function ($row) {
            switch($row->target){
                case 0:
                    $icon = '<div style="width:50px;heigth:50px" title="'.$row->target.'" class="mx-auto"><img class="img-thumbnail mx-auto" src="'.asset('assets/images/point/0.png').'"></div>';
                break;
                case 1:
                    $icon = '<div style="width:50px;heigth:50px" title="'.$row->target.'" class="mx-auto"><img class="img-thumbnail mx-auto" src="'.asset('assets/images/point/1.png').'"></div>';
                break;
                case 2:
                    $icon = '<div style="width:50px;heigth:50px" title="'.$row->target.'" class="mx-auto"><img class="img-thumbnail mx-auto" src="'.asset('assets/images/point/2.png').'"></div>';
                break;
                case 3:
                    $icon = '<div style="width:50px;heigth:50px" title="'.$row->target.'" class="mx-auto"><img class="img-thumbnail mx-auto" src="'.asset('assets/images/point/3.png').'"></div>';
                break;
                case 4:
                    $icon = '<div style="width:50px;heigth:50px" title="'.$row->target.'" class="mx-auto"><img class="img-thumbnail mx-auto" src="'.asset('assets/images/point/4.png').'"></div>';
                break;
                case 5:
                    $icon = '<div style="width:50px;heigth:50px" title="'.$row->target.'" class="mx-auto"><img class="img-thumbnail mx-auto" src="'.asset('assets/images/point/5.png').'"></div>';
                break;
                    
            }
            return $icon;
        })
            
        ->addIndexColumn()
        ->rawColumns(['start','actual','target'])
        ->make(true);
        
    }
}
