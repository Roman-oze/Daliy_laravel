<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Student extends Model
{
    use HasFactory;

    use SoftDeletes;

    protected $table ="students";
    protected $primarykey ="student_id";

    // public function setNameAttribute($value){
    //     $this->attributes['name'] = ucwords($value);
    // }

    // public function getNameAttribute($value){
    //     return date("d-m-y", strtotime($value));
    // }
}
