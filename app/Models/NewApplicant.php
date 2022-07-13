<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NewApplicant extends Model
{
    use HasFactory;

    protected $table = 'appointment_new_applicant';

    public $timestamps = false;

    protected $fillable = [
        'last_name',
        'first_name' ,
        'middle_name' ,
        'suffix',
        'age',
        'birthday',
        'religion',
        'ethnic_group',
        'sex',
        'civil_status',
        'blood_type',
        'disability_type' ,
        'disability_cause',
        'address',
        'barangay',
        'phone_number',
        'telephone_number',
        'email',
        'educational_attainment',
        'employment_status',
        'employment_category',
        'employment_type',
        'occupation' ,
        'organization_affliated',
        'organization_contact_person',
        'organization_office_address',
        'organization_telephone_number',
        'sss_number',
        'gsis_number',
        'pagibig_number',
        'philhealth_number',
        'father_name',        
        'mother_name',
        'guardian_name'
    ];
    
}
