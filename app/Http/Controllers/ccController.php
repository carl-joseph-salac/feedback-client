<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class ccController extends Controller
{
    public function cc1(Request $request){
        $request->session()->put('customCheck', $request->has('customCheck'));

        $cc = $this->ccquestion('cc1');
        return view('cc1', compact('cc'));
    }

    public function cc1Checked(Request $request){
        $cc = $this->ccquestion('cc1');
        return view('cc1', compact('cc'));
    }

    public function cc2(Request $request){
        session(['cc1' => $request->input('cc1')]);
        $cc1Choices4 = DB::table('tbl_cc_question')->where('id', 1)->value('choices4');
        if(session('cc1') == $cc1Choices4){
            session(['cc2' => 0]);
            session(['cc3' => 0]);
            return redirect('sqd0');
        }
        else{
            $cc = $this->ccquestion('cc2');
            return view('cc2', compact('cc'));
        }
    }

    public function cc2Checked(Request $request){
        $cc = $this->ccquestion('cc2');
        return view('cc2', compact('cc',));
    }

    public function cc3(Request $request){
        session(['cc2' => $request->input('cc2')]);
        $cc = $this->ccquestion('cc3');
        return view('cc3', compact('cc'));
    }

    public function cc3Checked(Request $request){
        $cc1Choices4 = DB::table('tbl_cc_question')->where('id', 1)->value('choices4');
        if(session('cc1') == $cc1Choices4){
            return redirect('cc1Checked');
        }
        else{
            $cc = $this->ccquestion('cc3');
            return view('cc3', compact('cc'));
        }
    }

    private function ccquestion($question_no){
        return  DB::table('tbl_cc_question')->where('question_no', $question_no)->first();
    }
}
