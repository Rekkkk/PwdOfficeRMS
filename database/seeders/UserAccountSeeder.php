<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
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
            'password' => bcrypt('1'),
            'is_super_admin' => '1',
            'user_id' => '1',
        
        ]);
    }
}
