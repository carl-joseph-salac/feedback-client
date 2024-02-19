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

    public function store(Request $request){
        $cc1 = DB::table('tbl_cc_question');
        // Validate the input
        $validatedData = $request->validate([
            'cc1' => 'nullable',
            'cc2' => 'nullable',
            'cc3' => 'nullable',
            'cc4' => 'nullable'
            // Add validation rules for other fields
        ]);

        // Store the validated data in the session
        $request->session()->put('form_data', $validatedData);

        // Redirect to the confirmation page
        return redirect()->route('confirmation', compact('cc1'));
    }

    public function show()
    {
        // Check if the session variable exists
        if (session()->has('form_data')) {
            // Retrieve the stored form data from the session
            $formData = session('form_data');

            // Pass the form data to the confirmation view
            return view('confirmation', compact('formData'));
        } else {
            // Handle the case when form data is not found in the session
            abort(404); // or redirect to an error page
        }
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
