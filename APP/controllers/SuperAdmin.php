<?php
include_once('Admin.php');
session_start();
class SuperAdmin extends Admin

{

    
    function __construct()
    {
        parent:: __construct();
    }

public function index()
{
    
    $blooddetails = $this->model-> get_Blooddetails('Matara');
    $this->view->render("super_index",$blooddetails);
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
             "firstname"=>$this->testInput($_POST["fname"]),
             "lastname"=>$this->testInput($_POST["lname"]),
             "nic"=>$this->testInput($_POST["nic"]),
             "district"=>$this->testInput($_POST["district"]),
             "city"=>$this->testInput($_POST["city"]),
             "address"=>$this->testInput($_POST["address"]),
             "email"=>$this->testInput($_POST["email"]),
             "phonenumber"=>$this->testInput($_POST["phone"]),
             "password"=>$this->testInput($_POST["pword"]),
             "confirm"=>$this->testInput($_POST["confirm"]),
             "gender"=>$this->testInput($_POST["gender"]),
            
            
           ];
           
if ($this->model->checkAvailabilityOfNIC($dataArray["nic"])) {
   if ($this->model->checkAvailabilityOfBBC($dataArray["district"])) {
       # code...
   
           if ((strlen($dataArray["nic"])==10  || strlen($dataArray["nic"])==12) && (filter_var($dataArray["email"],FILTER_VALIDATE_EMAIL) && (($dataArray["password"])==$dataArray["confirm"]))) {
             $hashed_password = password_hash($dataArray["password"], PASSWORD_DEFAULT);
             
            $dataArray["password"] = $hashed_password;
            
            
             $registerResult = $this->model->adminRegister($dataArray);
            
             
             if (empty($registerResult)) {
                $_SESSION['success']='success';
                header("Location:http://localhost/DonateToBlood/SuperAdmin/RegisterFormLoad ");
              }

           }else {
            $_SESSION['err']='Already have cordinator';
            header("Location:http://localhost/DonateToBlood/SuperAdmin/RegisterFormLoad ");
           }
          
        }else {
            $_SESSION['err_district']='Already have cordinator';
            header("Location:http://localhost/DonateToBlood/SuperAdmin/RegisterFormLoad ");
        }
    }else {
        $_SESSION['err_nic']='Already registered';
        header("Location:http://localhost/DonateToBlood/SuperAdmin/RegisterFormLoad ");
    }
}
}
}

public function viewAdminData()
    {
        $registerResult1 = $this->model->get_AdminData();
        // print_r($registerResult2);
        if(!empty($registerResult1)){
            $this->view->render("super_viewAdmin",$registerResult1);
        
        }else{
            $this->view->render("super_viewAdmin");

        }
    }

    public function removeAdmin(){
        
       $id =$this->testInput( $_GET["nic"]);
       
       $registerResult1 = $this->model->remove_admin($id);
       
       if(empty($registerResult1)){
           
        $this->viewAdminData();
    }
    }

    public function displayBlood(){

        if (isset($_POST["sbmt_btn"])){
            
            $district=$this->testInput($_POST["district"]);
            $bloodquantity = $this->model->get_Blooddetails($district);
            // $bloodquantity["district"]=$district;
            $this->view->render("super_index",$bloodquantity);
        }

    }


}

