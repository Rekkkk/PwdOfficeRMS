<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pwd;

class PwdManagementController extends Controller
{
    public function pwdManagementPage(){

        $pwd ['pwd'] = Pwd::all();

        return view('userpages/pwdmanagement/pwd-management', $pwd);
    }
}
