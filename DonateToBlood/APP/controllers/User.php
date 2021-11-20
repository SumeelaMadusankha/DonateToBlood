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
                "fname"=>$this->testInput($_POST["fname"]),
                "lname"=>$this->testInput($_POST["lname"]),
                "age"=>$this->testInput($_POST["age"]),
                "email"=>$this->testInput($_POST["email"]),
                "mobnum"=>$this->testInput($_POST["nobnum"]),
                "nic"=>$this->testInput($_POST["nic"]),
                "gender"=>$this->testInput($_POST["gender"]),
                "bday"=>$this->testInput($_POST["bday"]),
                "cityfname"=>$this->testInput($_POST["city"]),
                "district"=>$this->testInput($_POST["district"]),
                "bloodtype"=>$this->testInput($_POST["bloodtype"]),

              ];
              if ((strlen($dataArray["nic"])==10  || strlen($dataArray["nic"])==12) && (filter_var(FILTER_VALIDATE_EMAIL,$dataArray["email"]))) {
                $registerResult = $this->model->updateData($dataArray);
              }
              
           }
       }
    }

}
?>