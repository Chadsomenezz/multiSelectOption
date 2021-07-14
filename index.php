<?php

// Core Controller
class Core_Controller{

    protected function view ($viewName){
        include "./views/" .$viewName. ".php";
    }
}


class Main extends Core_Controller{ 
    
    public function index(){
        $this->view("index");

    }
    

}


$test = new Main();
$test->index();
