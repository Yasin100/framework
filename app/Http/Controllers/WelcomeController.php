<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Container\Container;

class WelcomeController
{
    public function index()
    {
        $student = Student::find(1);
        $data = $student->getAttributes();

        $app = Container::getInstance();//获取服务容器实例
        $factory = $app->make('view');
        return $factory->make('welcome')->with('data', $data);
    }
}
