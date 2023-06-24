<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class resumeController extends Controller
{
    function page(Request $request){
        return view('pages.resume');
    }

    function resumeLink(Request $request){
        return DB::table('resumes')->first();
    }

    function experiencesData(Request $request){
        return DB::table('experiences')->get();
    }

    function educationData(Request $request){
        return DB::table('educations')->get();
    }

    function skillsData(Request $request){
        return DB::table('skills')->get();
    }

    function languageData(Request $request){
        return DB::table('languages')->get();
    }
}
