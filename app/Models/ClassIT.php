<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ClassIT extends Model
{
    use HasFactory;
    protected $table ='class_its';
    protected $primaryKey='classId';
    public $timestamps=false;
    
     public function teacher()
    {
        return $this->hasOne(Teacher::class,'class_Id','classId');
    }
    public function schoolFun(){
        return $this->belongsTo(School::class,'school_Id','schoolId');
    }
    
}
