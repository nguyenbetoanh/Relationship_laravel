<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
    use HasFactory;
    protected $table ='teacher';
    protected $primaryKey='teacherId';
    public $timestamps=false;


    public function classIT()
    {
        return $this->belongsTo(ClassIT::class,'class_Id','classId')->withPivot('value');
    }

    public function schoolFun()
    {
        return $this->belongsToMany(School::class,'shools_teacher','teacher_Id','school_Id');
    }
}
