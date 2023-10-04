<?php

namespace App\Http\Controllers\Student;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use AClass;

class StudentController extends Controller
{
    public function getOne()
    {
        $student = (object)['name' => 'Ahmed', 'gpa' => 50];
        return view('students.one')->with(compact('student'));
    }

    public function getAll()
    {
        $students = [
            (object)['name' => 'Ali', 'gpa' => -500],
            (object)['name' => 'Ahmed', 'gpa' => -50],
            (object)['name' => 'Hosam', 'gpa' => -50],
        ];

        return view('students.all')->with(compact('students'));
    }
}
