<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'last_name' => 'Cabusas',
            'first_name' => 'Jeric Michael',
            'middle_name' => 'Goloran',
            'affiliation' => '',
            'birthday' => '2000-11-17',
            'gender' => 'Male',
            'civil_status' => 'Single',
            'address' => 'Cabuyao City',
            'phone_number' => '09095145293'
        ]);
    }
}
