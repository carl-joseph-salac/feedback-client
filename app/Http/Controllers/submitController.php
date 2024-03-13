<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class submitController extends Controller
{
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
                'clientNumber' => 2024,
                // 'clientNumber' => session('clientNumber'),
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
