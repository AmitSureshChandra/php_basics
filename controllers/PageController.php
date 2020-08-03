<?php

namespace App\Controller;

use App\Core\App;

class PageController extends Controller
{
    public function index(){
        try {
            $users = App::get('database')->selectAll('users');
        }
        catch (Exception $exception){
            echo $exception->getMessage();
        }

        return view('index', compact('users'));
    }

    public function about(){
        $company = 'SoloLearn';
        return view('about',compact('company'));
    }

    public function contact(){
        return view('contact');
    }

    public function addTask(){
        return view('add_task');
    }
}