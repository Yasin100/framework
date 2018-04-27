<?php

namespace App\Http\Controllers;

use App\Models\Student;

class WelcomeController
{

    public function index()
    {
        $student = Student::first();

        $data = $student->getAttributes();

        return "学生 id = {$data['id']}; 学生 name = {$data['name']}; 学生 age = {$data['age']}";
    }
}
