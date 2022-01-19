<?php
session_start();
class Index extends Controller{
    function __construct()
    {
        parent::__construct();

    }

    function index(){
        if (isset($_SESSION['nic'])) {
            $this->view->render('index');
        }else {
            $this->view->render('index');
        }
       
    }
    function secondIndex(){
        $this->view->render('index');
    }
}



?>