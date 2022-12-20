<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class employee extends Model
{
    use HasFactory;

    //accessor
    public function getNameAttribute($value){
        return lcFirst($value);
    }

    
}