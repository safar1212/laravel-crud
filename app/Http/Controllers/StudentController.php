<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class StudentController extends Controller
{
    public function allStudents(){
        $students = DB::table('students')->get();
    //    return $students;
        //  dd($students); debug information
        return view('allStudents',['data' => $students]);
    }

    public function singleStudent(string $id){
        $students = DB::table('students')->where('id', $id)->get();
        // return $students;
         return view('student',['data' => $students]);
    }

    public function addStudent(){
        $student = DB::table('students')->insert([
            'student_name' => 'raza',
            'age' => '12',
            'city' => "Quetta",
        ]);
        if($student){
            echo "<h1>Data successfully added to students table</h1>";
        } else {
            echo "data didn't added";
        }
    }

    public function updateStudent() {
        $student = DB::table('students')->where('id',1)
        ->update([
            'city' => "Karachi"
        ]);

        if($student){
            echo "<h1>Data successfully update in students table</h1>";
        } else {
            echo "data didn't update";
        }

    }

    public function deleteStudent(string $id) {
        $student = DB::table('students')->where('id', $id)
        ->delete();

        if($student) {
            echo "student with this id deleted";
            return redirect()->route('home');
        } else {
            echo "student didn't delete";
        }

    }

   
    
}