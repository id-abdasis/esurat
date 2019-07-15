<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Auth;
use Session;

class AuthController extends Controller
{
    public function login(Request $request){
        $data = $request->input();
        $surat = DB::table('surat')->where('email', '=', $data['email']);
        if (Auth::attempt($request->only('email', 'password'))){
            Session::flash('adminSession');
            return view('tambah-surat');
        }

    }
}
