<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class termsAndCondtionController extends Controller
{
    public function termsAndCondition(Request $request){
        $customCheck = session('customCheck');
        $request->session()->put('clientNumber', $request->get('logsNumber'));
        return view('termsAndCondition', compact('customCheck'));
    }
}
