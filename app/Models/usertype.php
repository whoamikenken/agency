<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class usertype extends Model
{
    public $table = "usertype";

    use HasFactory;

    protected $fillable = [
        'code',
        'description',
        'created_by'
    ];
}
