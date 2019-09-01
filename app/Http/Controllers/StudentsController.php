<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Student;

class StudentsController extends Controller
{
    public function list()
    {
      $students = Student::all();
      return view('internals.students', [
        'students' => $students
      ]);
    }
}
