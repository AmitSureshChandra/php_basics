<?php


class PageController extends Controller
{
    public function index(){
        try {
            $users = App::get('database')->selectAll('users');
        }
        catch (Exception $exception){
            echo $exception->getMessage();
        }

        return view('index');
    }

    public function about(){
        return view('about');
    }

    public function contact(){
        return view('contact');
    }

    public function addTask(){
        return view('add_task');
    }
}