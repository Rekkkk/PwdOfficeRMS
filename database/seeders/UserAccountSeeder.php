<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Account;

class UserAccountSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Account::create([
            'email' => 'jeric@yahoo.com',
            'password' => '1',
            'is_super_admin' => '0',
            'user_id' => '1',
            'barangay_id' => '1'
        ]);
    }
}
