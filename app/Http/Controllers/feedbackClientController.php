<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class feedbackClientController extends Controller
{
    public function termsAndCondition(Request $request){
        $customCheck = session('customCheck');
        $request->session()->put('clientNumber', $request->get('logsNumber'));
        //session()->flush();
        return view('termsAndCondition', compact('customCheck'));
    }

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
        $cc = $this->ccquestion('cc2');
        return view('cc2', compact('cc'));
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
        $cc = $this->ccquestion('cc3');
        return view('cc3', compact('cc'));
    }

    public function sqd0(Request $request){
        session(['cc3' => $request->input('cc3')]);
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
        $client = DB::table('tbl_clientLogs')->where('id', session('clientNumber'))->first();
        if($client->officeConcerned == 'Cashier'){
            $sqd = $this->sqdquestion('sqd5');
            return view('sqd5', compact('sqd'));
        }
        else{
            return redirect('sqd6');
        }
    }

    public function sqd5Star(Request $request){
        $client = DB::table('tbl_clientLogs')->where('id', session('clientNumber'))->first();
        if($client->officeConcerned == 'Cashier'){
            $sqd = $this->sqdquestion('sqd5');
            return view('sqd5', compact('sqd'));
        }
        else{
            return redirect('sqd4Star');
        }
    }

    public function sqd6(Request $request){
        $client = DB::table('tbl_clientLogs')->where('id', session('clientNumber'))->first();
        if($client->officeConcerned == 'Cashier'){
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

    public function suggestion (Request $request){
        session(['sqd8' => $request->input('sqd8')]);
        return view('suggestion');
    }

    public function suggestionAnswered (Request $request){
        return view('suggestion');
    }

    public function confirmation(Request $request){
        $request->session()->put('suggestion', $request->suggestion);

        $cc = DB::table('tbl_cc_question')->orderBy('id', 'ASC')->get();
        $sqd = DB::table('tbl_sqd_question')->orderBy('id', 'ASC')->get();
        return view('confirmation', compact('cc', 'sqd'));
    }

    private function ccquestion($question_no){
        return  DB::table('tbl_cc_question')->where('question_no', $question_no)->first();
    }

    private function sqdquestion($question_no){
        return  DB::table('tbl_sqd_question')->where('question_no', $question_no)->first();
    }

    public function saveFeedback(Request $request){
        $query = DB::table('tbl_feedback')->whereYear('feedback_date', date('Y'))
                ->orderBy('feedbackNumber', 'desc')->first();
        if($query){
            $lastNumber = explode('-',$query->feedbackNumber);
            if($lastNumber[1] < 10){
                $feedBackNumber = date('Y').'-0000'.$lastNumber[1] + 1;
            }
            elseif($lastNumber[1] < 100){
                $feedBackNumber = date('Y').'-000'.$lastNumber[1] + 1;
            }
            elseif($lastNumber[1] < 1000){
                $feedBackNumber = date('Y').'-00'.$lastNumber[1] + 1;
            }
            elseif($lastNumber[1] < 10000){
                $feedBackNumber = date('Y').'-0'.$lastNumber[1] + 1;
            }
            elseif($lastNumber[1] < 10000){
                $feedBackNumber = date('Y').'-'.$lastNumber[1] + 1;
            }
        }
        else{
            $feedBackNumber = date('Y').'-00001';
        }

        try{
            DB::table('tbl_feedback')
            ->insert([
                // 'purpose' => 'acv',
                'clientNumber' => session('clientNumber'),
                'feedbackNumber' => $feedBackNumber,
                'cc1' => session('cc1'),
                'cc2' => session('cc2'),
                'cc3' => session('cc3'),
                'sqd0' => session('sqd0'),
                'sqd1' => session('sqd1'),
                'sqd2' => session('sqd2'),
                'sqd3' => session('sqd3'),
                'sqd4' => session('sqd4'),
                'sqd5' => session('sqd5'),
                'sqd6' => session('sqd6'),
                'sqd7' => session('sqd7'),
                'sqd8' => session('sqd8'),
                'feedback_date' => date('Y-m-d H:i:s'),
                'suggestion' =>session('suggestion'),
            ]);
            session()->flush();
            return view('thankyou');

        }
        catch(\Exception $e){
            return $e;
        }
    }
}
