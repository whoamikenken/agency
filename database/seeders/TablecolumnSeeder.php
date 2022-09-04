<?php

namespace Database\Seeders;

use App\Models\tablecolumn;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TablecolumnSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Table Permission
        tablecolumn::factory()->create([
            'title' => 'code',
            'status' => 'Show',
            'table' => 'branches'
        ]);

        tablecolumn::factory()->create([
            'title' => 'description',
            'status' => 'Show',
            'table' => 'branches'
        ]);

        tablecolumn::factory()->create([
            'title' => 'updated_at',
            'status' => 'Show',
            'table' => 'branches'
        ]);

        tablecolumn::factory()->create([
            'title' => 'modified_by',
            'status' => 'Show',
            'table' => 'branches'
        ]);

        tablecolumn::factory()->create([
            'title' => 'created_at',
            'status' => 'Show',
            'table' => 'branches'
        ]);

        tablecolumn::factory()->create([
            'title' => 'created_by',
            'status' => 'Show',
            'table' => 'branches'
        ]);
        
    }
}
