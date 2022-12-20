<?php

namespace App\Models; 

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class member extends Model
{
    use HasFactory;
    //mutator
    public $timestamps = false;
    public function setNameAttribute($value){
        $this->attributes['name'] = "Mr ".$value;
    }
    
    public function setEmailAttribute($value){
        $this->attributes['email'] = "my".$value;
    }
    
}