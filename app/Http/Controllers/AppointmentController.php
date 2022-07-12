<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Barangay;

class AppointmentController extends Controller
{
    public function appointmentPage(){

        return view('userpages/appointment/appointment-management');
    }

 
}
