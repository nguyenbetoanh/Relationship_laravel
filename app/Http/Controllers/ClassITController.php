<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ClassIT;
class ClassITController extends Controller
{
    public function index()
    {
        $classIt = ClassIT::all();
        return view("classITs.index", compact('classIt'));
    }
    public function inputData()
    {
        return view('classITs.create');
    }
    public function create(Request $request)
    {
        $classNew = new ClassIT();
        $classNew->className = $request->input('className');
        $classNew->price = $request->input('price');
        $classNew->classStatus = $request->input('classStatus');
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
        return view('classITs.inputUpdate',compact('updateClassIt'));
    }
    public function update(Request $request,$id)
    {
        $update = ClassIT::findOrFail($id);
        $update->className = $request->input('className');
        $update->price = $request->input('price');
        $update->classStatus = $request->input('classStatus');
        $update->save();
        return redirect()->action('App\Http\Controllers\ClassITController@index');
    }

    public function findByKey($key)
    {
        $classIt =  ClassIT::where('classId', $key)->orWhere('className', 'like', '%' .$key. '%')->get();
        return view("classITs.index", compact('classIt'));
    }
}
