<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

//by default it will pluralize and connect to the db
class Pizza extends Model
{
    use HasFactory;
    //protected $table = 'table_name' //to override the class used

    // Automatically casts the array to JSON string on DB write and JSON string to array on DB read
    protected $casts = [
        'toppings' => 'array'
    ];
}
