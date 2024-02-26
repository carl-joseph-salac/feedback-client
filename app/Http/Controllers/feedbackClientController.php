<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class feedbackClientController extends Controller
{
    public function termsAndCondition(Request $request){
        // Retrieve session data
         $customCheck = session('customCheck');

        //session()->flush();

        // Pass session data to the view
        return view('termsAndCondition', compact('customCheck'));
    }

    public function cc1(Request $request){
        $request->session()->put('customCheck', $request->has('customCheck'));

        $cc = $this->ccquestion('cc1');
        return view('cc1', compact('cc'));
    }

    public function cc1Checked(Request $request){
        // session('cc1Choices1');
        // session('cc1Choices2');
        // session('cc1Choices3');
        // session('cc1Choices4');

        $cc = $this->ccquestion('cc1');
        return view('cc1', compact('cc'));
    }


    public function cc2(Request $request){
        $request->session()->put('cc1Choices1', $request->has('cc1Choices1'));
        $request->session()->put('cc1Choices2', $request->has('cc1Choices2'));
        $request->session()->put('cc1Choices3', $request->has('cc1Choices3'));
        $request->session()->put('cc1Choices4', $request->has('cc1Choices4'));
        $request->session()->put('cc1Choices1Value', $request->input('cc1Choices1'));
        $request->session()->put('cc1Choices2Value', $request->input('cc1Choices2'));
        $request->session()->put('cc1Choices3Value', $request->input('cc1Choices3'));
        $request->session()->put('cc1Choices4Value', $request->input('cc1Choices4'));

        $cc = $this->ccquestion('cc2');
        return view('cc2', compact('cc'));
    }

    public function cc2Checked(Request $request){
        // session('cc2Choices1');
        // session('cc2Choices2');
        // session('cc2Choices3');
        // session('cc2Choices4');
        // session('cc2Choices5');

        $cc = $this->ccquestion('cc2');
        return view('cc2', compact('cc',));
    }

    public function cc3(Request $request){
        $request->session()->put('cc2Choices1', $request->has('cc2Choices1'));
        $request->session()->put('cc2Choices2', $request->has('cc2Choices2'));
        $request->session()->put('cc2Choices3', $request->has('cc2Choices3'));
        $request->session()->put('cc2Choices4', $request->has('cc2Choices4'));
        $request->session()->put('cc2Choices5', $request->has('cc2Choices5'));
        $request->session()->put('cc2Choices1Value', $request->input('cc2Choices1'));
        $request->session()->put('cc2Choices2Value', $request->input('cc2Choices2'));
        $request->session()->put('cc2Choices3Value', $request->input('cc2Choices3'));
        $request->session()->put('cc2Choices4Value', $request->input('cc2Choices4'));
        $request->session()->put('cc2Choices5Value', $request->input('cc2Choices5'));

        $cc = $this->ccquestion('cc3');
        return view('cc3', compact('cc'));
    }

    public function cc3Checked(Request $request){
        // session('cc3Choices1');
        // session('cc3Choices2');
        // session('cc3Choices3');
        // session('cc3Choices4');
        // session('cc2Choices2');

        $cc = $this->ccquestion('cc3');
        return view('cc3', compact('cc'));
    }

    public function sqd0(Request $request){
        $request->session()->put('cc3Choices1', $request->has('cc3Choices1'));
        $request->session()->put('cc3Choices2', $request->has('cc3Choices2'));
        $request->session()->put('cc3Choices3', $request->has('cc3Choices3'));
        $request->session()->put('cc3Choices4', $request->has('cc3Choices4'));
        $request->session()->put('cc3Choices1Value', $request->input('cc3Choices1'));
        $request->session()->put('cc3Choices2Value', $request->input('cc3Choices2'));
        $request->session()->put('cc3Choices3Value', $request->input('cc3Choices3'));
        $request->session()->put('cc3Choices4Value', $request->input('cc3Choices4'));

        $sqd = $this->sqdquestion('sqd0');
        return view('sqd0', compact('sqd'));
    }

    public function sqd0Star(Request $request){
        // session('sqd0');
        // session('sqd0ChosenRating');

        $sqd = $this->sqdquestion('sqd0');
        return view('sqd0', compact('sqd'));
    }

    public function sqd1(Request $request){
        $request->session()->put('sqd0', $request->sqd0);
        $request->session()->put('sqd0ChosenRating', $request->input('sqd0'));

        $sqd = $this->sqdquestion('sqd1');
        return view('sqd1', compact('sqd'));
    }

    public function sqd1Star(Request $request){
        // session('sqd1');
        // session('sqd1ChosenRating');

        $sqd = $this->sqdquestion('sqd1');
        return view('sqd1', compact('sqd'));
    }

    public function sqd2(Request $request){
        $request->session()->put('sqd1', $request->sqd1);
        $request->session()->put('sqd1ChosenRating', $request->input('sqd1'));

        $sqd = $this->sqdquestion('sqd2');
        return view('sqd2', compact('sqd'));
    }

    public function sqd2Star(Request $request){
        // session('sqd2');
        // session('sqd2ChosenRating');

        $sqd = $this->sqdquestion('sqd2');
        return view('sqd2', compact('sqd'));
    }

    public function sqd3(Request $request){
        $request->session()->put('sqd2', $request->sqd2);
        $request->session()->put('sqd2ChosenRating', $request->input('sqd2'));

        $sqd = $this->sqdquestion('sqd3');
        return view('sqd3', compact('sqd'));
    }

    public function sqd3Star(Request $request){
        // session('sqd3');
        // session('sqd3ChosenRating');

        $sqd = $this->sqdquestion('sqd3');
        return view('sqd3', compact('sqd'));
    }

    public function sqd4(Request $request){
        $request->session()->put('sqd3', $request->sqd3);
        $request->session()->put('sqd3ChosenRating', $request->input('sqd3'));

        $sqd = $this->sqdquestion('sqd4');
        return view('sqd4', compact('sqd'));
    }

    public function sqd4Star(Request $request){
        // session('sqd4');
        // session('sqd4ChosenRating');

        $sqd = $this->sqdquestion('sqd4');
        return view('sqd4', compact('sqd'));
    }

    public function sqd5(Request $request){
        $request->session()->put('sqd4', $request->sqd4);
        $request->session()->put('sqd4ChosenRating', $request->input('sqd4'));

        $sqd = $this->sqdquestion('sqd5');
        return view('sqd5', compact('sqd'));
    }

    public function sqd5Star(Request $request){
        // session('sqd5');
        // session('sqd5ChosenRating');

        $sqd = $this->sqdquestion('sqd5');
        return view('sqd5', compact('sqd'));
    }

    public function sqd6(Request $request){
        $request->session()->put('sqd5', $request->sqd5);
        $request->session()->put('sqd5ChosenRating', $request->input('sqd5'));

        $sqd = $this->sqdquestion('sqd6');
        return view('sqd6', compact('sqd'));
    }

    public function sqd6Star(Request $request){
        // session('sqd6');
        // session('sqd6ChosenRating');

        $sqd = $this->sqdquestion('sqd6');
        return view('sqd6', compact('sqd'));
    }

    public function sqd7(Request $request){
        $request->session()->put('sqd6', $request->sqd6);
        $request->session()->put('sqd6ChosenRating', $request->input('sqd6'));

        $sqd = $this->sqdquestion('sqd7');
        return view('sqd7', compact('sqd'));
    }

    public function sqd7Star(Request $request){
        // session('sqd7');
        // session('sqd7ChosenRating');

        $sqd = $this->sqdquestion('sqd7');
        return view('sqd7', compact('sqd'));
    }

    public function sqd8(Request $request){
        $request->session()->put('sqd7', $request->sqd7);
        $request->session()->put('sqd7ChosenRating', $request->input('sqd7'));

        $sqd = $this->sqdquestion('sqd8');
        return view('sqd8', compact('sqd'));
    }

    public function sqd8Star(Request $request){
        // session('sqd8');
        // session('sqd8ChosenRating');

        $sqd = $this->sqdquestion('sqd8');
        return view('sqd8', compact('sqd'));
    }

    public function suggestion (Request $request){
        $request->session()->put('sqd8', $request->sqd8);
        $request->session()->put('sqd8ChosenRating', $request->input('sqd8'));

        return view('suggestion');
    }

    public function confirmation(Request $request){
        // session('cc1Choices1Value');
        // session('cc1Choices2Value');
        // session('cc1Choices3Value');
        // session('cc1Choices4Value');

        // session('cc2Choices1Value');
        // session('cc2Choices2Value');
        // session('cc2Choices3Value');
        // session('cc2Choices4Value');
        // session('cc2Choices5Value');
        // session('cc3Choices1Value');
        // session('cc3Choices2Value');
        // session('cc3Choices3Value');
        // session('cc3Choices4Value');

        return view('confirmation');
    }

    public function thankyou(){
        return view('thankyou');
    }

    private function ccquestion($question_no){
        return  DB::table('tbl_cc_question')->where('question_no', $question_no)->first();
    }

    private function sqdquestion($question_no){
        return  DB::table('tbl_sqd_question')->where('question_no', $question_no)->first();
    }

}

// // Validate the input
// $validatedData = $request->validate([
//     'cc1' => 'nullable',
//     'cc2' => 'nullable',
//     'cc3' => 'nullable',
//     'cc4' => 'nullable'
// ], [
//     // Custom error message if none of the checkboxes are selected
//     'required' => 'At least one option must be selected.',
// ]);

// // Ensure at least one checkbox is checked
// if (!$request->filled('cc1') && !$request->filled('cc2') && !$request->filled('cc3') && !$request->filled('cc4')) {
//     return redirect()->back()->withErrors(['cc1' => 'At least one option must be selected.'])->withInput();
// }
