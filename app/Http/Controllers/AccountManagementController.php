<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Barangay;
use App\Models\BarangayHandle;
use App\Models\Account;
use App\Models\AccountStatus;
use Illuminate\Support\Facades\Hash;

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
            'password' => Hash::make($request->password),
            'is_super_admin' => '0',
            'user_id' => User::all()->last()->user_id
        ]);

        AccountStatus::create([
            'account_id' => Account::all()->last()->account_id,
            'is_disable' => '0',
            'is_suspend' => '0'
        ]);

        BarangayHandle::create([
            'account_id' => Account::all()->last()->account_id,
            'barangay_id' => $request->barangay
        ]);

        return redirect()->route('account.management');
    }

    public function viewAccount($id){
   
        $data = User::where('user_id', '=', $id)->first();


       return view('userpages/accountmanagement/view-account', compact('data'));
    }

    public function suspendAccount(Request $request, $id){
        $users = AccountStatus::where('account_id', '=', $id)
        ->update(['is_suspend' => 1,
                'suspend_start' => $request->suspend_start,
                'suspend_end' => $request->suspend_end
        ]);

        return back();
    }

    public function disableAccount($id){

        AccountStatus::where('account_id', '=', $id)
        ->update(['is_disable' => 1]);

        return back();

    }
}
