<?php
include_once('User.php');
include_once("BloodPost.php");
include_once("CampPost.php");
include_once("EmailClient.php");
class UnregisteredUser extends User 
{
  
    function __construct()
    {
        parent::__construct();  
        
    }

    public function signUpFormLoad()
    {
      $this->view->render('signUp');
    }
    public function userregload()
    {
      $this->view->render('user_reg');
    }
         public function register()
        {
         
           if ($_SERVER["REQUEST_METHOD"]=="POST") {
               $_POST=filter_input_array(INPUT_POST,FILTER_SANITIZE_STRING);
               if (isset($_POST["register_btn"])) {
                  $dataArray=[
                    "firstName"=>$this->testInput($_POST["fname"]),
                    "lastName"=>$this->testInput($_POST["lname"]),
                    "nic"=>$this->testInput($_POST["nic"]),
                    "dob"=>$this->testInput($_POST["bday"]),
                    "address"=>$this->testInput($_POST["address"]),
                    "district"=>$this->testInput($_POST["districts"]),
                    "gender"=>$this->testInput($_POST["gender"]),
                    "bloodGroup"=>$this->testInput($_POST["blood"]),
                    "email"=>$this->testInput($_POST["email"]),
                    "mobileNo"=>$this->testInput($_POST["mobnum"]),
                    "jobType"=>$this->testInput("registeredUser"),
                    "city"=>$this->testInput($_POST["city"]),
      
                  ];
                  
                  if ((strlen($dataArray["nic"])==10  || strlen($dataArray["nic"])==12) && (filter_var($dataArray["email"],FILTER_VALIDATE_EMAIL))) {
                    $registerResult = $this->model->userRegister($dataArray);
                    if (empty($registerResult)) {
                      $_SESSION["msg"]="success";
                      header("Location:http:../Login/index");
                    }
                  }
                  
               }
           }
        }
    
    
        public function signUp()
        {
        
          
          if ($_SERVER["REQUEST_METHOD"] === "POST") {
           
            $_POST=filter_input_array(INPUT_POST,FILTER_SANITIZE_STRING);
            
             
               $dataArray=[
                 "nic"=>$this->testInput($_POST["nic"]),
                 "password"=>$this->testInput($_POST["password"]),
                 "re-password"=>$this->testInput($_POST["re-password"]),
               ];
               
              
               
               if ( $dataArray["password"]===$dataArray["re-password"]) {
                $result = $this->model->checkNic($dataArray);
              
                if (empty($result)){
                
                 $hashPassword = $_SESSION["password"] = password_hash( $dataArray["password"], PASSWORD_DEFAULT);
                 $this->view->data = $dataArray["nic"];
                 $_SESSION['error']="Fill this form to complete the registration";
                 $_SESSION['username']=$dataArray["nic"];
                 header("Location:http:../UnregisteredUser/userregload");
                }else {
                  $_SESSION['error']="The entered NIC is already registered";
                  header("Location:http:../UnregisteredUser/ signUpFormLoad");
                }
                  
               }
               else{
                $_SESSION['error']="Re-entered password is not matched";
                header("Location:http:../UnregisteredUser/signUpFormLoad");
               }
          
        }
}

public function loadBloodPost()
    {
       $post=new BloodPost();
       $post->Loadpostpage();
    }
public function loadCampPost()
{
  $post=new CampPost();
  $post->Loadpostpage();



}

}



?>