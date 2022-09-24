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
            'code' => '001',
            'description' => 'Manila',
            'modified_by' => 1,
            'created_by' => 1,
        ]);

        Branch::factory()->create([
            'code' => '002',
            'description' => 'Davao',
            'modified_by' => 1,
            'created_by' => 1,
        ]);

        Branch::factory()->create([
            'code' => '003',
            'description' => 'CDO',
            'modified_by' => 1,
            'created_by' => 1,
        ]);

        Branch::factory()->create([
            'code' => '004',
            'description' => 'GenSan',
            'modified_by' => 1,
            'created_by' => 1,
        ]);

        Branch::factory()->create([
            'code' => '005',
            'description' => 'Mindoro',
            'modified_by' => 1,
            'created_by' => 1,
        ]);

        Branch::factory()->create([
            'code' => '006',
            'description' => 'Tuguegarao',
            'modified_by' => 1,
            'created_by' => 1,
        ]);

        Branch::factory()->create([
            'code' => '007',
            'description' => 'Vigan',
            'modified_by' => 1,
            'created_by' => 1,
        ]);
    }
}
