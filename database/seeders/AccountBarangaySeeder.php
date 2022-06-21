<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Barangay;
use App\Models\Account;

class AccountBarangaySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

       DB::table('account_barangay')->insert(
        [
            'account_id' => User::select('account_id')->orderByRaw("RAND()")->first()->account_id,
            'barangay_id' => Barangay::select('barangay_id')->orderByRaw("RAND()")->first()->barangay_id,
        ]
    );
    
    }
}
