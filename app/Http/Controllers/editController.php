<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class editController extends Controller
{
    public function cc1Edit(Request $request){
        session(['cc1' => $request->input('cc1')]);
        return redirect()->route('edit');
    }

    public function cc2Edit(Request $request){
        session(['cc2' => $request->input('cc2')]);
        return redirect()->route('edit');
    }

    public function cc3Edit(Request $request){
        session(['cc3' => $request->input('cc3')]);
        return redirect()->route('edit');
    }

    public function sqd0Edit(Request $request){
        session(['sqd0' => $request->input('sqd0')]);
        return redirect()->route('edit');
    }

    public function sqd1Edit(Request $request){
        session(['sqd1' => $request->input('sqd1')]);
        return redirect()->route('edit');
    }
    public function sqd2Edit(Request $request){
        session(['sqd2' => $request->input('sqd2')]);
        return redirect()->route('edit');
    }

    public function sqd3Edit(Request $request){
        session(['sqd3' => $request->input('sqd3')]);
        return redirect()->route('edit');
    }

    public function sqd4Edit(Request $request){
        session(['sqd4' => $request->input('sqd4')]);
        return redirect()->route('edit');
    }

    public function sqd5Edit(Request $request){
        session(['sqd5' => $request->input('sqd5')]);
        return redirect()->route('edit');
    }

    public function sqd6Edit(Request $request){
        session(['sqd6' => $request->input('sqd6')]);
        return redirect()->route('edit');
    }

    public function sqd7Edit(Request $request){
        session(['sqd7' => $request->input('sqd7')]);
        return redirect()->route('edit');
    }

    public function sqd8Edit(Request $request){
        session(['sqd8' => $request->input('sqd8')]);
        return redirect()->route('edit');
    }

    public function edit(Request $request){
        /* retrieves session variables ('cc1', 'cc2', 'cc3') from ccEdit methods, to be displayed in confirmation view */
        for($i=1; $i<=3; $i++){
            session('cc' . $i);
        }

        /* retrieves session variables ('sqd0', to 'sqd8') from sqdEdit methods, to be displayed in confirmation view */
        for($i=0; $i<=8; $i++){
            session('sqd' . $i);
        }

        $cc = DB::table('tbl_cc_question')->orderBy('id', 'ASC')->get();
        $sqd = DB::table('tbl_sqd_question')->orderBy('id', 'ASC')->get();
        return view('confirmation', compact('cc', 'sqd'));
    }
}
