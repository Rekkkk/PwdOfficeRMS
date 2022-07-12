<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\PwdBarangay;

class PwdBarangaySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        PwdBarangay::create([
            'pwd_id' => 1,
            'barangay_id' => 1
        ]);
    }
}
