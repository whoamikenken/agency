<?php

namespace Database\Seeders;

use App\Models\Branch;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BranchSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Create Branches
        Branch::factory()->create([
            'code' => 'KMM',
            'description' => 'Manila',
            'agency_description' => 'Kingsmanpower Manila Main Office',
            'region' => 'Luzon',
            'color' => 'rgb(255, 0, 21)',
            'modified_by' => 1,
            'created_by' => 1,
        ]);

        Branch::factory()->create([
            'code' => 'KMG',
            'description' => 'Davao',
            'agency_description' => 'Kingsmanpower Davao',
            'region' => 'Mindanaos',
            'color' => 'rgb(255, 0, 242)',
            'modified_by' => 1,
            'created_by' => 1,
        ]);

        Branch::factory()->create([
            'code' => 'KMT',
            'description' => 'Tuguegarao',
            'agency_description' => 'Kingsmanpower Tuguegarao',
            'color' => 'rgb(0, 255, 25)',
            'region' => 'Manila',
            'modified_by' => 1,
            'created_by' => 1,
        ]);

        Branch::factory()->create([
            'code' => 'KMV',
            'description' => 'Vigan',
            'agency_description' => 'Kingsmanpower Vigan',
            'color' => 'rgb(234, 255, 5)',
            'region' => 'Visayas',
            'modified_by' => 1,
            'created_by' => 1,
        ]);

        Branch::factory()->create([
            'code' => 'KMC',
            'description' => 'Cebu',
            'agency_description' => 'Kingsmanpower Cebu',
            'color' => 'rgb(234, 255, 5)',
            'region' => 'Visayas',
            'modified_by' => 1,
            'created_by' => 1,
        ]);
    }   
}
