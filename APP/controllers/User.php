<?php
class User extends Controller{
    private $firstName;
    private $lastName;
    private $bloodGroup;
    private $District;
    private $MobileNo;
    private $email;
    private $nic;
    private $address;
    private $dateOfBirth;
    private $gender;
    function __construct()
    {
        parent::__construct();
    }
     public function register()
    {
       if ($_SERVER["REQUEST_METHOD"]=="POST") {
           $_POST=filter_input_array(INPUT_POST,FILTER_SANITIZE_STRING);
           if (isset($_POST["register_btn"])) {
              $dataArray=[
                "firstName"=>$this->testInput($_POST["fname"]),
                "lastname"=>$this->testInput($_POST["lname"]),
                "nic"=>$this->testInput($_POST["nic"]),
                "dob"=>$this->testInput($_POST["bday"]),
                "address"=>$this->testInput($_POST["address"]),
                "district"=>$this->testInput($_POST["district"]),
                "gender"=>$this->testInput($_POST["gender"]),
                "bloodGroup"=>$this->testInput($_POST["bloodtype"]),
                "email"=>$this->testInput($_POST["email"]),
                "mobileNo"=>$this->testInput($_POST["nobnum"]),
                "jobType"=>$this->testInput("registeredUser"),
                "city"=>$this->testInput($_POST["city"]),
               
               
               
              ];
              if ((strlen($dataArray["nic"])==10  || strlen($dataArray["nic"])==12) && (filter_var(FILTER_VALIDATE_EMAIL,$dataArray["email"]))) {
                $registerResult = $this->model->userRegister($dataArray);
              }
              
           }
       }
    }


    public function signUp()
    {
      if ($_SERVER["REQUEST_METHOD"]=="POST") {
        $_POST=filter_input_array(INPUT_POST,FILTER_SANITIZE_STRING);
        if (isset($_POST["signUp-btn"])) {
           $dataArray=[
             "nic"=>$this->testInput($_POST["nic"]),
             "password"=>$this->testInput($_POST["password"]),
             "re-password"=>$this->testInput($_POST["re-password"]),
           ];
           
           if ((strlen($dataArray["nic"])==10  || strlen($dataArray["nic"])==12) && (preg_match("#.*^(?=.{8,20})(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*W).*$#", $dataArray["password"] )) && (preg_match("#.*^(?=.{8,20})(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*W).*$#", $dataArray["re-password"])) && ($dataArray["password"]===$dataArray)) {
            $this->view->render("user_reg");  
           }
           
        }
    }
    }

}
?>