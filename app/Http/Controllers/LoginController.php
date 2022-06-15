<?php

namespace App\Http\Controllers;
use App\Models\Account;

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
            return view('landingpage/landingpages/login');
        }else{
            return('Not OKAY');
        }
    }
}
