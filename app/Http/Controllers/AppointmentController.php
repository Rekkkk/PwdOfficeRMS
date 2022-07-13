<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Appointment;
use App\Models\NewApplicant;

class AppointmentController extends Controller
{
    public function appointmentPage(){
        $data ['appointment'] = Appointment::all();

        return view('userpages/appointment/appointment-management', $data);
    }

    public function newApplicantCreate(Request $request){

        Appointment::create([
            'transaction' => 'Application',
            'appointment_date' => $request->appointment_date
        ]);        

        NewApplicant::create([
            'appointment_id' => Appointment::all()->last()->appointment_id,
            'last_name' => $request->last_name,
            'first_name' => $request->first_name,
            'middle_name' => $request->middle_name,
            'suffix' => $request->suffix,
            'age' => $request->age,
            'birthday' => $request->birthday,
            'religion' => $request->religion,
            'ethnic_group' => $request->ethnic_group,
            'sex' => $request->sex,
            'civil_status' => $request->civil_status,
            'blood_type' => $request->blood_type,
            'disability_type' => $request->disability_type,
            'disability_cause' => $request->disability_cause,
            'address' => $request->address,
            'barangay' => $request->barangay,
            'phone_number' => $request->phone_number,
            'telephone_number' => $request->telephone_number,
            'email' => $request->email,
            'educational_attainment' => $request->educational_attainment,
            'employment_status' => $request->employment_status,
            'employment_category' => $request->employment_category,
            'employment_type' => $request->employment_type,
            'occupation' => $request->occupation,
            'organization_affliated' => $request->organization_affliated,
            'organization_contact_person' => $request->organization_contact_person,
            'organization_office_address' => $request->organization_office_address,
            'organization_telephone_number' => $request->organization_telephone_number,
            'sss_number' => $request->sss_number,
            'gsis_number' => $request->gsis_number,
            'pagibig_number' => $request->pagibig_number,
            'philhealth_number' => $request->philhealth_number,
            'father_name' => $request->father_name,        
            'mother_name' => $request->mother_name,
            'guardian_name' => $request->guardian_name,
        ]);
    }

}
