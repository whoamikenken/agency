<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tablecolumn extends Model
{
    use HasFactory;

    public static function processColumnName($column){
        $returnArray = array();

        $colDescription = array(
            'code' => 'Code',
            'description' => 'Description',
            'jobsite' => 'Jobsite',
            'updated_at' => 'Modified On',
            'modified_by' => 'Modified By',
            'created_at' => 'Created On',
            'created_by' => 'Created By'
            );

        unset($column[0]);
        foreach ($column as $key => $value) {
            
            $returnArray[] = array(
                'code' => $value->Field,
                'description' => $colDescription[$value->Field]
            ); 
            
        }
        return json_decode(json_encode($returnArray), FALSE);
    }
}
