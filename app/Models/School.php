<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class School extends Model
{
    use HasFactory;
    protected $table = "school";
    protected $primaryKey = "schoolId";
    public $timestamps = false;

    public function classFun()
    {
        return $this->hasMany(ClassIT::class, 'school_Id', 'schoolId');
    }

    public function newClass()
    {
        return $this->hasOne(ClassIT::class, 'school_Id', 'schoolId')->orderBy('price', 'DESC');
    }

    public function teacherFun()
    {
        return $this->belongsToMany(Teacher::class,'shools_teacher','school_Id','teacher_Id');
    }
}
