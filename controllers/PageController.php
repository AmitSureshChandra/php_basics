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

        include 'views/index.view.php';
    }

    public function about(){
        require 'views/about.view.php';
    }

    public function contact(){
        require 'views/contact.view.php';
    }

    public function addTask(){
        require 'views/add_task.view.php';
    }
}