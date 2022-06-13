<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class AuthenticationController extends Controller
{
    public function loginPage(){
        return view('landingpage/landingpages/login');
    }
    public function login(Request $request){
        $userLogin = User::where('email', '=', $request->email)
            ->where('password', '=', $request->password)
            ->first();

        if($userLogin){
            return("OK");
        }else{
            return('Not OKAY');
        }
    }
}
