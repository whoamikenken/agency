<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\User;
use App\Models\Branch;
use App\Models\Jobsite;
use App\Models\Medical;
use App\Models\Location;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Database\Seeders\LocationSeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::factory()->create([
            'username' => "whoamiken",
            'name' => "Kennedy Hipolito",
            'fname' => "Kennedy",
            'lname' => "Hipolito",
            'email' => "whoamikenken@gmail.com",
            'user_type' => 'admin',
            'status' => 'verified',
            'email_verified_at' => now(),
            'password' => bcrypt('a'), // password
            'remember_token' => Str::random(10)
        ]);

        User::factory(10)->create();
        Medical::factory(10)->create();
        
        $this->call([
            BranchSeeder::class,
            LocationSeeder::class,
            JobsiteSeeder::class,
            PrincipalSeeder::class,
            MenuSeeder::class
        ]);
    }
}
