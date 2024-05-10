<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;
    protected $primaryKey='id';
    protected $table='students';
    protected $fillable=['first_name','last_name','gender','qualifications'];
    public function address(){
        return $this->hasOne(StudentAddress::class,'userid','id');
    }
    public function orders(){
        return $this->hasMany(Orders::class,'userid','id');
    }
}
