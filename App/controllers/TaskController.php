<?php

namespace App\Controller;

use App\Core\App;
use Task;

class TaskController extends Controller
{


    public function index(){
        $tasks = Task::all();
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
    }
}