<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class StudentController extends Controller
{
    public function allStudents(){
        $students = DB::table('students')
        ->select('students.*','cities.city_name')
        ->join('cities', 'students.city_id', '=', 'cities.id')
        ->orderBy('id','ASC')->get();
    //    return $students;
        //  dd($students); debug information
        return view('allStudents',['data' => $students]);
    }

    public function singleStudent(string $id){
        $students = DB::table('students')->where('id', $id)->get();
        // return $students;
         return view('student',['data' => $students]);
    }

    public function addStudent(Request $req){
        $student = DB::table('students')->insert([
            'student_name' => $req->studentName,
            'age' => $req->studentAge,
            'city' => $req->studentCity,
        ]);      
        if($student){
            return redirect()->route('home');
        } else {
            echo "data didn't added";
        }
    }

    public function updateStudent(Request $req, $id) {
        // return $req;
        
        $student = DB::table('students')->where('id',$id)
        ->update([
            'student_name' => $req->studentName,
            'age' => $req->studentAge,
            'city' => $req->studentCity,
        ]);

        if($student){
            return redirect()->route('home');
        } else {
            echo "data didn't update";
        }

    }

    public function updatepage($id) {
        // $student = DB::table('students')->where('id', $id)->get();
        $student = DB::table('students')->find($id);
        // return $student;
        return view('updateStudent', ['data' => $student]);
    }

    public function deleteStudent(string $id) {
        $student = DB::table('students')->where('id', $id)
        ->delete();

        if($student) {
            echo "student with this id deleted";
            return redirect()->route('home');
        } else {
            echo "student didn't deleted from students table";
        }

    }

   
    
}
