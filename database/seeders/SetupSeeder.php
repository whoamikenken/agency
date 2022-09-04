<?php

namespace Database\Seeders;

use App\Models\setup;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SetupSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        setup::factory()->create([
            'description' => 'Medical Clinic',
            'table' => 'medical'
        ]);

        setup::factory()->create([
            'description' => 'Job Site',
            'table' => 'jobsites'
        ]);

        setup::factory()->create([
            'description' => 'Location',
            'table' => 'location'
        ]);

        setup::factory()->create([
            'description' => 'Branches',
            'table' => 'branches'
        ]);

        setup::factory()->create([
            'description' => 'Principals',
            'table' => 'principals'
        ]);
    }
}
