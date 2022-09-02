<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\User;
use App\Models\Branch;
use App\Models\Jobsite;
use App\Models\Location;
use App\Models\Medical;
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
        User::factory(10)->create();
        Medical::factory(10)->create();
        
        $this->call([
            BranchSeeder::class,
            LocationSeeder::class,
            JobsiteSeeder::class,
            PrincipalSeeder::class
        ]);
    }
}
