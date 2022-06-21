<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Account;
use App\Models\User;
use Session;


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
            $request->session()->put('loginId', $userLogin->account_id);
            session()->put('isSuperAdmin', $userLogin->is_super_admin);
            return redirect('dashboard');
        }else{
            return('Not OKAY');
        }
    }

    public function redirectUser(){
        $data = array();
        if(Session::has('loginId')){
            $data = Account::where('account_id', '=', Session::get('loginId'))->first();
        }   

        $userData = User::where('user_id', '=', $data->user_id)->first();

       

        return view ('userpages/dashboard', compact('data', 'userData'));
    }   

    public function logOut(){
        if(Session::has('loginId')){
            Session::pull('loginId');
            Session::pull('isSuperAdmin');
            return redirect ('/');
        }
    }
}
