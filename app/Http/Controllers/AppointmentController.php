<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\NewApplicant;

class AppointmentController extends Controller
{
    public function appointmentPage(){
        return view('userpages/appointment/appointment-management');
    }

    public function newApplicantCreate(Request $request){
        // NewApplicant::create($request->all());
        dd(NewApplicant::create($request->all()));
    }

 
}
