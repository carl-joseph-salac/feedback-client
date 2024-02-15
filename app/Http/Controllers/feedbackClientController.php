<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class feedbackClientController extends Controller
{
    public function termsAndCondition(){
        return view('termsAndCondition');
    }

    public function feedback(){
        return view('feedback');
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
}
