<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Barangay;


class AccountManagementController extends Controller
{

    public function accountManagementPage(){
        $data ['users'] = User::all();
 

        return view('userpages/accountmanagement/account-management', $data);
        
    }
    public function createNewAccountPage(){
        
        $data ['barangays'] = Barangay::all();
 
        return view('userpages/accountmanagement/create-account', $data);
    }
    public function createNewAccount(Request $request){
        User::create($request->all());

    }
}
