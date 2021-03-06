<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        $this->call(BarangaySeeder::class);
        $this->call(UserSeeder::class);
        $this->call(UserAccountSeeder::class);
        $this->call(AccountStatusSeeder::class);
        $this->call(BarangayHandleSeeder::class);
        $this->call(PwdSeeder::class);
        $this->call(PwdBarangaySeeder::class);
    
    }
}
