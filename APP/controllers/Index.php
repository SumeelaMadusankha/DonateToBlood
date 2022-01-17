<?php
session_start();
class Index extends Controller{
    function __construct()
    {
        parent::__construct();

    }

    function index(){
        $this->view->render('index');
    }
    function secondIndex(){
        $this->view->render('reg_user_index');
    }
}



?>