<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class suggestionController extends Controller
{
    public function suggestion (Request $request){
        session(['sqd8' => $request->input('sqd8')]);
        return view('suggestion');
    }

    public function suggestionAnswered (Request $request){
        return view('suggestion');
    }
}
