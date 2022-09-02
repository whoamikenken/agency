<?php

namespace Database\Seeders;

use App\Models\Principal;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PrincipalSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Principal 
        Principal::factory()->create([
            'code' => 'APM',
            'description' => 'AGENSI PEKERJAAN MALINDO SDN BHD',
            'jobsite' => 'MAY',
            'modified_by' => 1,
            'created_by' => 1,
        ]);

        Principal::factory()->create([
            'code' => 'EHEL',
            'description' => 'EMPIRE HILL EMPLOYMENT LIMITED ',
            'jobsite' => 'HK',
            'modified_by' => 1,
            'created_by' => 1,
        ]);

        Principal::factory()->create([
            'code' => 'TESC',
            'description' => 'TECHNIC EMPLOYMENT SERVICE CENTRE',
            'jobsite' => 'HK',
            'modified_by' => 1,
            'created_by' => 1,
        ]);

        Principal::factory()->create([
            'code' => 'DEA',
            'description' => 'DICKSON EMPLOYMENT AGENCY',
            'jobsite' => 'HK',
            'modified_by' => 1,
            'created_by' => 1,
        ]);

        Principal::factory()->create([
            'code' => 'GES',
            'description' => 'GRACEFIELD EMPLOYMENT SERVICE LTD.',
            'jobsite' => 'HK',
            'modified_by' => 1,
            'created_by' => 1,
        ]);

        Principal::factory()->create([
            'code' => 'HFEC',
            'description' => 'HOME FIRST EMPLOYMENT CENTRE.',
            'jobsite' => 'HK',
            'modified_by' => 1,
            'created_by' => 1,
        ]);

        Principal::factory()->create([
            'code' => 'BEC',
            'description' => 'BRIGHTWAY EMPLOYMENT CENTRE.',
            'jobsite' => 'HK',
            'modified_by' => 1,
            'created_by' => 1,
        ]);
    }
}
