<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class contactController extends Controller
{
    function page(Request $request){
        return view('page.contacts');
    }

    function contactRequest(Request $request){
        return DB::table('contacts')->insert($request->input());
    }
}
