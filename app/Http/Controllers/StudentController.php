<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Models\Student;

class StudentController extends Controller
{
    public function homePage()
    {
        return view('home');
    }



    public function showAllStudent()
    {
        //$x = DB::table('students')->get();
        $x = Student::all();
        return view('showAll',['allStudent' => $x]);
    
    } 

    public function addNewStudent()
    {
        return view('addNewStd');
    }

    public function createNewStudent(Request $req)
    {
        /*$student = DB::table('students')->insert([
            'roll' => $req->roll,
            'name' => $req->name,
            'sec' => $req->section,
        ]);*/

        $student = new Student();
        $student->roll = $req->roll;
        $student->name = $req->name;
        $student->sec = $req->section;
        $student->save();

        $req -> session()->flash('msg', "Data Inserted Successfully !!");
        return redirect()->back();
    }


    public function singleStudent($id)
    {
        //$x = DB::table('students')->where('id', $id)->first();

        $x = Student::findOrFail($id);
        return view('singleStudent',['s' => $x]);
    }


    public function editStudent($id)
    {
        //$y = DB::table('students')->where('id', $id)->first();
        $x = Student::findOrFail($id);
        //return view('editStudent',compact('e'));
        return view('showAll',['e' => $x]);
        
    }

    public function updateStudent(Request $req)
    {
        /*$z = DB::table('students')->where('id', $req->id)->update([
            'roll' => $req->roll,
            'name' => $req->name,
            'sec' => $req->section,
        ]);*/

        $student = Student::findOrFail($req->id);
        $student->roll = $req->roll;
        $student->name = $req->name;
        $student->sec = $req->section;
        $student->save();

        $req -> session()->flash('msg', "Data Updated Successfully !!");
        return redirect()->back();
    }


    public function deleteStudent($id)
    {
         //DB::table('students')->where('id', $id)->delete();

         $student = Student::findOrFail($id);
         $student->delete();

        return back()->with('m', 'Deleted Successfully !!');
    }
}
