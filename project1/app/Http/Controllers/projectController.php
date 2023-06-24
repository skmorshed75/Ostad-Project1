<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class projectController extends Controller
{
    function page(Request $request){
        return view('pages.projects');
    }

    function projectsData(Request $request){
        return DB::table('projects')->get();
    }
}
