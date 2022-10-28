<?php

namespace Database\Seeders;

use App\Models\Tablecolumn;
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
        
        Tablecolumn::factory()->create([
            'title' => 'Code',
            'column' => 'code',
            'status' => 'Show',
            'table_id' => 1,
            'table' => 'medical',
            'created_by' => 1
        ]);

        Tablecolumn::factory()->create([
            'title' => 'Description',
            'column' => 'description',
            'status' => 'Show',
            'table_id' => 1,
            'table' => 'medical',
            'created_by' => 1
        ]);

        Tablecolumn::factory()->create([
            'title' => 'Created By',
            'column' => 'created_by',
            'status' => 'Show',
            'table_id' => 1,
            'table' => 'medical',
            'created_by' => 1
        ]);

        Tablecolumn::factory()->create([
            'title' => 'Location',
            'column' => 'location',
            'status' => 'Show',
            'table_id' => 1,
            'table' => 'medical',
            'created_by' => 1
        ]);


        Tablecolumn::factory()->create([
            'title' => 'Code',
            'column' => 'code',
            'status' => 'Show',
            'table_id' => 2,
            'table' => 'jobsites',
            'created_by' => 1
        ]);

        Tablecolumn::factory()->create([
            'title' => 'Description',
            'column' => 'description',
            'status' => 'Show',
            'table_id' => 2,
            'table' => 'jobsites',
            'created_by' => 1
        ]);

        Tablecolumn::factory()->create([
            'title' => 'Created By',
            'column' => 'created_by',
            'status' => 'Show',
            'table_id' => 2,
            'table' => 'jobsites',
            'created_by' => 1
        ]);

        Tablecolumn::factory()->create([
            'title' => 'Code',
            'column' => 'code',
            'status' => 'Show',
            'table_id' => 3,
            'table' => 'location',
            'created_by' => 1
        ]);

        Tablecolumn::factory()->create([
            'title' => 'Description',
            'column' => 'description',
            'status' => 'Show',
            'table_id' => 3,
            'table' => 'location',
            'created_by' => 1
        ]);

        Tablecolumn::factory()->create([
            'title' => 'Created By',
            'column' => 'created_by',
            'status' => 'Show',
            'table_id' => 3,
            'table' => 'location',
            'created_by' => 1
        ]);

        Tablecolumn::factory()->create([
            'title' => 'Code',
            'column' => 'code',
            'status' => 'Show',
            'table_id' => 4,
            'table' => 'principals',
            'created_by' => 1
        ]);

        Tablecolumn::factory()->create([
            'title' => 'Description',
            'column' => 'description',
            'status' => 'Show',
            'table_id' => 4,
            'table' => 'principals',
            'created_by' => 1
        ]);

        Tablecolumn::factory()->create([
            'title' => 'Created By',
            'column' => 'created_by',
            'status' => 'Show',
            'table_id' => 4,
            'table' => 'principals',
            'created_by' => 1
        ]);

        Tablecolumn::factory()->create([
            'title' => 'Code',
            'column' => 'code',
            'status' => 'Show',
            'table_id' => 5,
            'table' => 'principals',
            'created_by' => 1
        ]);

        Tablecolumn::factory()->create([
            'title' => 'Description',
            'column' => 'description',
            'status' => 'Show',
            'table_id' => 5,
            'table' => 'principals',
            'created_by' => 1
        ]);

        Tablecolumn::factory()->create([
            'title' => 'Created By',
            'column' => 'created_by',
            'status' => 'Show',
            'table_id' => 5,
            'table' => 'principals',
            'created_by' => 1
        ]);


        // Tablecolumn::factory()->create([
        //     'title' => 'description',
        //     'status' => 'Show',
        //     'table_id' => '4'
        // ]);

        // Tablecolumn::factory()->create([
        //     'title' => 'updated_at',
        //     'status' => 'Show',
        //     'table_id' => '4'
        // ]);

        // Tablecolumn::factory()->create([
        //     'title' => 'modified_by',
        //     'status' => 'Show',
        //     'table_id' => '4'
        // ]);

        // Tablecolumn::factory()->create([
        //     'title' => 'created_at',
        //     'status' => 'Show',
        //     'table_id' => '4'
        // ]);

        // Tablecolumn::factory()->create([
        //     'title' => 'created_by',
        //     'status' => 'Show',
        //     'table_id' => '4'
        // ]);
        
    }
}
