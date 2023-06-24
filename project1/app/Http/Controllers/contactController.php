<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class contactController extends Controller
{
    function page(Request $request){
        return view('page.contacts');
    }

    function contactRequest(){
        return DB::table('contacts')->insert($request->input());
    }
}
