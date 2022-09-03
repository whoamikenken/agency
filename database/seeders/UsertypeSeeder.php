<?php

namespace Database\Seeders;

use App\Models\usertype;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UsertypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        usertype::factory()->create([
            'code' => 'Admin',
            'description' => 'Administrator has all the permission on modules',
            'modified_by' => 1,
            'created_by' => 1,
        ]);

        usertype::factory()->create([
            'code' => 'Sales',
            'description' => 'Sales can only view and create applicants',
            'modified_by' => 1,
            'created_by' => 1,
        ]);
    }
}
