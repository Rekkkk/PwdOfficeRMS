<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Pwd;

class PwdSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Pwd::create([
            'pwd_id' => '1',
            'last_name' => 'Cabusas',
            'first_name' => 'Jeric Michael',
            'middle_name' => 'Goloran',
            'suffix' => '',
            'age' => '21',
            'birthday' => '2000-11-17',
            'religion' => 'Catholic',
            'ethnic_group' => '',
            'sex' => 'Male',
            'civil_status' => 'Single',
            'blood_type' => 'O',
            'disability_type' => 'Visual Disability',
            'disability_cause' => 'Injury',
            'address' => 'Cabuyao City',
            'barangay' => 'Banay-Banay',
            'phone_number' => '0912345678',
            'telephone_number' => '',
            'email' => '',
            'educational_attainment' => 'College',
            'employment_status' => 'Unemployed',
            'employment_category' => '',
            'employment_type' => '',
            'occupation' => '',
            'organization_affliated' => '',
            'organization_contact_person' => '',
            'organization_office_address' => '',
            'organization_telephone_number' => '',
            'sss_number' => '',
            'gsis_number' => '',
            'pagibig_number' => '',
            'philhealth_number' => '',
            'father_name' => 'Joel Nuer Cabusas',        
            'mother_name' => 'Anie Goloran Cabusas',
            'guardian_name' => 'Anie Goloran Cabusas',
        ]);
    }
}
