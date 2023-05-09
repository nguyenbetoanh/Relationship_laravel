<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ClassIT;
use App\Models\School;
use App\Models\Teacher;

class RelatinonshipController extends Controller
{
    public function oneToOne()
    {
        $class = ClassIT::find(1);
        dd($class);
        // $teacher=Teacher::find(2)->classIT;
        // dd($teacher);

    }
    public function oneToMany()
    {
        // 1 trường thì có nhiều lớp học
        // $school=School::find(1)->classFun;
        // dd($school);
        // 1 lớp thì chỉ thuộc 1 trường học thôi
        // $class=ClassIT::find(5)->schoolFun;
        // dd($class);
        // 1 trường nhưng trả ra 1 lớp mới nhất
        $school = School::find(1)->newClass;
        dd($school);
    }
    public function manyToMany()
    {
        // $school = School::find()->teacherFun;
        // dd($school);
        // $teacher=Teacher::find(1)->schoolFun;
         //    dd($teacher);

       $teacher=Teacher::find(1)->schoolFun;
        dd($teacher);

    }

    
}
