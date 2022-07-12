<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use App\Models\AccountStatus;
use App\Models\Account;
use App\Models\User;
use Session;
use Validator;

class AuthController extends Controller
{
    
    public function loginPage(){
        return view('landingpage/landingpages/login');
    }

    public function login(Request $request){
        $userLogin = Account::where('email', '=', $request->email)->first();
        if($userLogin){
            if(Hash::check($request->password, $userLogin->password)){
                if($userLogin->accountStatus->is_disable == 1)
                {
                    return redirect()->back()->withInput()->withErrors(['msg' => "Your account is disable. Contact the Admin"]);
                }elseif($userLogin->accountStatus->is_suspend == 1)
                {              
                    $todayDate = date("Y-m-d");
                    if($todayDate < $userLogin->accountStatus->suspend_start)
                    {
                        return $this->setSession($userLogin);
                    }elseif($todayDate > $userLogin->accountStatus->suspend_end)
                    {
                        AccountStatus::where('account_id', '=',  $userLogin->account_id)
                        ->update(['is_suspend' => 0, 'suspend_start' => null, 'suspend_end' => null]);

                        return $this->setSession($userLogin);
                         
                    }else
                    {
                        return redirect()->back()->withInput()->withErrors(['msg' => "Your account is suspended until " . $userLogin->accountStatus->suspend_end . ". Contact the Admin."]);
                    }
                }else
                { 
                    return $this->setSession($userLogin);
                }   
            }else
            {
                return redirect()->back()->withInput()->withErrors(['msg' => 'Invalid username or password']);
            }
        }
    }

    public function setSession($userLogin){
        session()->put('loginId', $userLogin->account_id);
        session()->put('isSuperAdmin', $userLogin->is_super_admin);
        return redirect()->route('dashboard');
    }
  
    public function redirectUser(){

        $data = array();

        if(Session::has('loginId'))
        {
            $data = Account::where('account_id', '=', Session::get('loginId'))->first();
        }   

        $userData = User::where('user_id', '=', $data->user_id)->first();
        return view ('userpages/dashboard', compact('data', 'userData'));
    }   

    public function logOut(){
        if(Session::has('loginId'))
        {
            session()->flush();
            return redirect ('/');
        }
    }
}
