<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        //data dummy for user
        User::factory(10)->create();

        User::factory()->create([
            'name' => 'Udin',
            'email' => 'udin@ash.com',
            'password' => Hash::make('12345678'),
            'position' => 'Admin',
            'department' => 'Technology',
        ]);

        //data dummy for company
        \App\Models\Company::create([
            'name' => 'PT Ash',
            'email' => 'contact@ash.com',
            'address' => 'Jalan Prof. HR. Boenyamin Pabuwaran, Purwokerto Utara, Banyumas, Jawa Tengah',
            'latitude' => '-7.399757',
            'longitude' => '109.244768',
            'radius_km' => '0.5',
            'time_in' => '08:00',
            'time_out' => '17:00',
        ]);

        $this->call([
            AttendanceSeeder::class,
            PermissionSeeder::class,
        ]);
    }
}
