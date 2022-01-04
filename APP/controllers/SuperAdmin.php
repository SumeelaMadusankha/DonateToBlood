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

public function addAdmin(){
    if ($_SERVER["REQUEST_METHOD"]=="POST") {
        $_POST=filter_input_array(INPUT_POST,FILTER_SANITIZE_STRING);
        if (isset($_POST["register_btn"])) {
            
           $dataArray=[
             "fullname"=>$this->testInput($_POST["flname"]),
             "nic"=>$this->testInput($_POST["nic"]),
             "district"=>$this->testInput($_POST["district"]),
             "username"=>$this->testInput($_POST["username"]),
             "email"=>$this->testInput($_POST["email"]),
             "phoneNo"=>$this->testInput($_POST["phone"]),
             "password"=>$this->testInput($_POST["pword"]),
             "confirm"=>$this->testInput($_POST["confirm"]),
             "gender"=>$this->testInput($_POST["gender"]),
            
            
           ];
           

           if ((strlen($dataArray["nic"])==10  || strlen($dataArray["nic"])==12) && (filter_var($dataArray["email"],FILTER_VALIDATE_EMAIL) && (($dataArray["password"])==$dataArray["confirm"]))) {
             $hashed_password = password_hash($dataArray["password"], PASSWORD_DEFAULT);
             
            $dataArray["password"] = $hashed_password;
            
            
             $registerResult = $this->model->adminRegister($dataArray);
            
             if (empty($registerResult)) {
                $this->view->render("super_Register_Admin");
              }
           }

           
           
        }
    }


}

        public function showAdmins(){
            
        }


}


?>