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
            'first_name' => 'Jeric Michael',
            'last_name' => 'Cabusas',
            'middle_name' => 'Goloran',
            'gender' => 'Male',
            'birthday' => '2000-11-17'
        ]);
    }
}
