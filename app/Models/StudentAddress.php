<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StudentAddress extends Model
{
    use HasFactory;
    protected $primaryKey='addressid';

    // public function user(){
    //     return $this->belongsTo(Student::class,'userid','id');
    // }
}
