<?php

namespace App\Controller;

use App\Core\App;

class TaskController extends Controller
{
    public function index(){
        $tasks = App::get('database')->selectAll('task');
        return view('task',compact('tasks'));
    }

    public function store(){

        header("Location: /");

        if (isset($_POST['name']))
        {
            App::get('database')->insert('task',[
                'name' => $_POST['name']
            ]);
        }

//        $tasks = App::get('database')->selectAll('task');
//        return view('task',compact('tasks'));
    }
}