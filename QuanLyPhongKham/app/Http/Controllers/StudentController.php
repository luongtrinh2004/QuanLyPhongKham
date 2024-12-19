<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;

class StudentController extends Controller
{
    public function index()
    {
        // Lấy tất cả dữ liệu từ bảng students
        $students = Student::all();

        // Trả về view với dữ liệu sinh viên
        return view('students.index', compact('students'));
    }
}
