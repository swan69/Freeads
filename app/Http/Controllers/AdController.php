<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdController extends Controller
{
    public function create(){
        return view('new_ad');
    }

    public function save(request $request){
        dd($request);
    }
}
