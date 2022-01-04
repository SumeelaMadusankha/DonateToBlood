<?php
include_once('Admin.php');
class SuperAdmin extends Admin
{

    
    function __construct()
    {
        parent:: __construct();
    }

public function index()
{
    $this->view->render("super_index");
}
public function RegisterFormLoad()
{
    $this->view->render("super_Register_Admin");
}
public function viewDistrictAdminList()
{
    $this->view->render("super_viewAdmin");
}



}


?>