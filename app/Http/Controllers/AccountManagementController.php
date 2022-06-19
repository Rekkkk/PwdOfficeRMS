<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class AccountManagementController extends Controller
{

    public function accountManagementPage(){
        return view('userpages/accountmanagement/account-management');
        
    }
    public function createNewAccountPage(){
        return view('userpages/accountmanagement/create-account');
    }
    public function createNewAccount(Request $request){

        $newUser = new User();
        $newUser->first_name = $request->firstname;
        $newUser->last_name = $request->lastname;
        $newUser->middle_name = $request->middlename;
        $newUser->gender = $request->gender;
        $newUser->birthday = $request->birthday;
        $newUser->save();

    }
}
