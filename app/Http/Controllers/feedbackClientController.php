<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class feedbackClientController extends Controller
{
    public function termsAndCondition(){
        return view('termsAndCondition');
    }

    public function cc1(){
        $cc = $this->ccquestion('cc1');
        return view('cc1', compact('cc'));
    }

    public function cc2(){
        $cc = $this->ccquestion('cc2');
        return view('cc2', compact('cc'));
    }

    public function cc3(){
        $cc = $this->ccquestion('cc3');
        return view('cc3', compact('cc'));
    }

    public function sqd0(){
        $sqd = $this->sqdquestion('sqd0');
        return view('sqd0', compact('sqd'));
    }

    public function confirmation(){
        return view('confirmation');
    }

    public function thankyou(){
        return view('thankyou');
    }

    public function welcome(){
        return view('welcome');
    }

    private function ccquestion($question_no){
        return  DB::table('tbl_cc_question')->where('question_no', $question_no)->first();
    }

    private function sqdquestion($question_no){
        return  DB::table('tbl_sqd_question')->where('question_no', $question_no)->first();
    }
}
