<?php

namespace App\Models;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class tablecolumn extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'table_id',
        'column',
        'table',
        'status'
    ];

    public $timestamps = false;

    public static function processColumnName($column){
        $returnArray = array();

        $colDescription = tablecolumn::getColumnArray();

        unset($column[0]);
        foreach ($column as $key => $value) {
            
            $returnArray[] = array(
                'code' => $value->Field,
                'description' => $colDescription[$value->Field]
            ); 
            
        }
        return json_decode(json_encode($returnArray), FALSE);
    }

    public static function getColumnArray(){
        $colDescription = array(
            'code' => 'Code',
            'description' => 'Description',
            'jobsite' => 'Jobsite',
            'updated_at' => 'Modified On',
            'address' => 'Address',
            'contact' => 'Contact',
            'location' => 'Location',
            'expiration_date' => 'Expiration Date',
            'modified_by' => 'Modified By',
            'created_at' => 'Created On',
            'created_by' => 'Created By'
        );

        return $colDescription;
    }

    public static function getColumnDescription($column)
    {
        $colDescription = tablecolumn::getColumnArray();

        return $colDescription[$column];
    }

    public static function getTableName($id)
    {
        $colDescription = DB::table('setups')->where('id', $id)->first();

        return $colDescription->table;
    }

    public static function getColumn($table){
        $column = array();
        $record = DB::table('tablecolumns')->where('table', $table)->get();
        foreach ($record as $key => $value) {
            $column[] = array("title" => $value->title, "column" => $value->column);
        }
        return $column;
    }
}