<?php

namespace Database\Seeders;

use App\Models\Usertype;
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
        Usertype::factory()->create([
            'code' => 'Admin',
            'description' => 'Administrator has all the permission on modules',
            'modified_by' => 1,
            'read' => "5,11,12,13,6,7,8,9,10,801,802,803,804,14,999",
            'add' => "5,11,12,6,7,8,9,10",
            'delete' => "5,11,12,6,7,8,9,10",
            'edit' => "5,11,12,6,7,8,9,10,801,802,803,804,14",
            'created_by' => 1,
        ]);

        Usertype::factory()->create([
            'code' => 'Sales',
            'description' => 'Sales can only view and create applicants',
            'read' => "12,13,8,9,801,802,803,804",
            'add' => "12,8,9",
            'delete' => "12,8,9",
            'edit' => "12,8,9,801,802,803,804",
            'modified_by' => 1,
            'created_by' => 1,
        ]);
    }
}
