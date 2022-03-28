<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\CompetenciesDirectoryModel;

class CompetenciesDirectory extends Controller
{
    public function index()
    {
        // $data = CompetenciesDirectoryModel::leftJoin('skill_category as sc', 'curriculum.id_skill_category', '=', 'sc.id_skill_category')
        // ->leftJoin('job_title as jt', 'curriculum.id_job_title', '=', 'jt.id_job_title')
        // ->get(['curriculum.*', 'jt.nama_job_title', 'sc.skill_category']);
        $data = [];
        return view('pages.admin.competencies-directory',  compact('data'));
    }
}
