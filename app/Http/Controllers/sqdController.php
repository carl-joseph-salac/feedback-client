<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class sqdController extends Controller
{
    public function sqd0(Request $request){
        $cc1Choices4 = DB::table('tbl_cc_question')->where('id', 1)->value('choices4');
        if(session('cc1') == $cc1Choices4){
            session('cc1');
        }
        else{
            session(['cc3' => $request->input('cc3')]);
        }
        $sqd = $this->sqdquestion('sqd0');
        return view('sqd0', compact('sqd'));
    }

    public function sqd0Star(Request $request){
        $sqd = $this->sqdquestion('sqd0');
        return view('sqd0', compact('sqd'));
    }

    public function sqd1(Request $request){
        session(['sqd0' => $request->input('sqd0')]);
        $sqd = $this->sqdquestion('sqd1');
        return view('sqd1', compact('sqd'));
    }

    public function sqd1Star(Request $request){
        $sqd = $this->sqdquestion('sqd1');
        return view('sqd1', compact('sqd'));
    }

    public function sqd2(Request $request){
        session(['sqd1' => $request->input('sqd1')]);
        $sqd = $this->sqdquestion('sqd2');
        return view('sqd2', compact('sqd'));
    }

    public function sqd2Star(Request $request){
        $sqd = $this->sqdquestion('sqd2');
        return view('sqd2', compact('sqd'));
    }

    public function sqd3(Request $request){
        session(['sqd2' => $request->input('sqd2')]);
        $sqd = $this->sqdquestion('sqd3');
        return view('sqd3', compact('sqd'));
    }

    public function sqd3Star(Request $request){
        $sqd = $this->sqdquestion('sqd3');
        return view('sqd3', compact('sqd'));
    }

    public function sqd4(Request $request){
        session(['sqd3' => $request->input('sqd3')]);
        $sqd = $this->sqdquestion('sqd4');
        return view('sqd4', compact('sqd'));
    }

    public function sqd4Star(Request $request){
        $sqd = $this->sqdquestion('sqd4');
        return view('sqd4', compact('sqd'));
    }

    public function sqd5(Request $request){
        session(['sqd4' => $request->input('sqd4')]);
        $client = DB::table('tbl_client_office_concerned')
        ->where([
            ['logsNumber', session('clientNumber')],
            ['officeName', 'Cashier']
            ])
        ->first();

        if($client){
            $sqd = $this->sqdquestion('sqd5');
            return view('sqd5', compact('sqd'));
        }
        else{
            return redirect('sqd6');
        }
    }

    public function sqd5Star(Request $request){
        $client = DB::table('tbl_client_office_concerned')
        ->where([
            ['logsNumber', session('clientNumber')],
            ['officeName', 'Cashier']
            ])
        ->first();

        if($client){
            $sqd = $this->sqdquestion('sqd5');
            return view('sqd5', compact('sqd'));
        }
        else{
            return redirect('sqd4Star');
        }
    }

    public function sqd6(Request $request){
        $client = DB::table('tbl_client_office_concerned')
        ->where([
            ['logsNumber', session('clientNumber')],
            ['officeName', 'Cashier']
            ])
        ->first();

        if($client){
            session(['sqd5' => $request->input('sqd5')]);
        }
        else{
            session(['sqd5' => 0]);
        }
        $sqd = $this->sqdquestion('sqd6');
        return view('sqd6', compact('sqd'));
    }

    public function sqd6Star(Request $request){
        $sqd = $this->sqdquestion('sqd6');
        return view('sqd6', compact('sqd'));
    }

    public function sqd7(Request $request){
        session(['sqd6' => $request->input('sqd6')]);
        $sqd = $this->sqdquestion('sqd7');
        return view('sqd7', compact('sqd'));
    }

    public function sqd7Star(Request $request){
        $sqd = $this->sqdquestion('sqd7');
        return view('sqd7', compact('sqd'));
    }

    public function sqd8(Request $request){
        session(['sqd7' => $request->input('sqd7')]);
        $sqd = $this->sqdquestion('sqd8');
        return view('sqd8', compact('sqd'));
    }

    public function sqd8Star(Request $request){
        $sqd = $this->sqdquestion('sqd8');
        return view('sqd8', compact('sqd'));
    }

    private function sqdquestion($question_no){
        return  DB::table('tbl_sqd_question')->where('question_no', $question_no)->first();
    }
}
