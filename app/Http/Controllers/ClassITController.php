<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ClassIT;
use App\Models\School;

class ClassITController extends Controller
{
    public function index()
    {
        $classIt = ClassIT::all();
        return view("classITs.index", compact('classIt'));
    }
    public function inputData()
    {    
        $school=School::all();
        return view('classITs.create',compact('school'));
    }
    public function create(Request $request)
    {
        $classNew = new ClassIT();
        $classNew->className = $request->input('className');
        $classNew->price = $request->input('price');
        $classNew->classStatus = $request->input('classStatus');
        $classNew->school_Id=$request->input('school_Id');
        $classNew->save();
        return redirect()->action('App\Http\Controllers\ClassITController@index');
    }
    public function detroy($id)
    {
        $deleteClassIt = ClassIT::findOrFail($id);
        $deleteClassIt->delete();
        return redirect()->action('App\Http\Controllers\ClassITController@index');
    }

    public function inputUpdate($id)
    {
        $updateClassIt = ClassIT::findOrFail($id);
        $school=School::all();
        return view('classITs.inputUpdate',compact('updateClassIt','school'));
    }
    public function update(Request $request,$id)
    {
        $update = ClassIT::findOrFail($id);
        $update->className = $request->input('className');
        $update->price = $request->input('price');
        $update->classStatus = $request->input('classStatus');
        $update->school_Id = $request->input('school_Id');
        $update->save();
        return redirect()->action('App\Http\Controllers\ClassITController@index');
    }

    public function findByKey($key)
    {
        $classIt =  ClassIT::where('classId', $key)->orWhere('className', 'like', '%' .$key. '%')->get();
        return view("classITs.index", compact('classIt'));
    }
}
