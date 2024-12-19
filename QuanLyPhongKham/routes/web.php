<?php

use App\Http\Controllers\StudentController;

// Route mặc định
Route::get('/', function () {
    return view('welcome');
});

// Route hiển thị danh sách sinh viên
Route::get('/students', [StudentController::class, 'index']);
