<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Barangay;
use App\Models\BarangayHandle;
use App\Models\Account;


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

        Account::create([
            'email' => $request->email,
            'password' => $request->password,
            'is_super_admin' => '0',
            'user_id' => User::all()->last()->user_id
        ]);

        BarangayHandle::create([
            'account_id' => Account::all()->last()->account_id,
            'barangay_id' => $request->barangay
        ]);

        return redirect()->route('account.management');
    }

    public function viewAccount($id){

        // $users = User::with('account')->get();
   
        $data = User::where('user_id', '=', $id)->first();
        // $userAccount = Account::where('user_id', '=', $userData->user_id)->first();

        // $userAccount = User::all()->last()->u_id
        
        return view('userpages/accountmanagement/view-account', compact('data'));
    }
}
