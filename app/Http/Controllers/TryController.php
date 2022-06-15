<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Account;

class TryController extends Controller
{
    public function insert(){

        $user = new User();
        $user->first_name = "jeric";
        $user->last_name = "cabusas";
        $user->middle_name = 'goloran';
        $user->gender = "Male";
        $user->birthday = "2013-03-15";

        $account = new Account();

        $account->email = "jeric@yahoo.com";
        $account->password = "12345";
        $account->is_super_admin = '1';
        $user->save();
        $user->account()->save($account);
         
        return "OKAY";

    }
}
