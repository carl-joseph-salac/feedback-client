<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class confirmationController extends Controller
{
    public function confirmation(Request $request){
        session(['suggestion' => $request->input('suggestion')]);
        session(['Confirm' => 'Confirm']);
        /* creates session variables ('cc1Edit', 'cc2Edit', 'cc3Edit') to be used as route names */
        for($i=1; $i<=3; $i++){
            $ccEdit = 'cc' . $i . 'Edit';
            session([$ccEdit => $ccEdit]);
        }
        /* creates session variables ('sqd0Edit', to 'sqd8Edit') to be used as route names */
        for($i=0; $i<=8; $i++){
            $sqdEdit = 'sqd' . $i . 'Edit';
            session([$sqdEdit => $sqdEdit]);
        }
        $cc = DB::table('tbl_cc_question')->orderBy('id', 'ASC')->get();
        $sqd = DB::table('tbl_sqd_question')->orderBy('id', 'ASC')->get();
        $cc1Choices4 = DB::table('tbl_cc_question')->where('id', 1)->value('choices4');
        session(['cc1Choices4' => $cc1Choices4]);
        return view('confirmation', compact('cc', 'sqd'));
    }
}
