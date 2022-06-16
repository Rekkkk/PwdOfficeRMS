<?php

namespace App\Http\Controllers;
use App\Models\Account;
use Session;


use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function loginPage(){
        return view('landingpage/landingpages/login');
    }
    public function login(Request $request){
        $userLogin = Account::where('email', '=', $request->email)
            ->where('password', '=', $request->password)
            ->first();

        if($userLogin){
            $request->session()->put('loginId', $userLogin->id);
            return redirect('dashboard');
        }else{
            return('Not OKAY');
        }
    }

    public function redirectUser(){
        $data = array();
        if(Session::has('loginId')){
            $data = Account::where('id', '=', Session::get('loginId'))->first();
        }
        return view ('userpages/dashboard', compact('data'));
    }

    public function logOut(){
        if(Session::has('loginId')){
            Session::pull('loginId');
            return redirect ('/');
        }
    }
}
