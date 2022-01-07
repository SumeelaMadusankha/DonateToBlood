<?php
include_once('User.php');
include_once('BloodPost.php');
session_start();
class RegisteredUser extends User 
{
  function __construct()
  {
    parent::__construct(); 
    
  } 
 

  public function setDetails($nic)
    {
      $this->loadModel('RegisteredUser');
      $details=$this->model->getRegisteredUserData($nic)[0];
     $this->firstName=$details['firstName'];
     $this->lastName=$details['lastName'];
     $this->bloodGroup=$details['bloodGroup;'];
     $this->District=$details['district'];
     $this->MobileNo=$details['MobileNo'];
     $this->email=$details['email'];
     $this->nic=$details['nic'];
     $this->address=$details['address'];
     $this->dateOfBirth=$details['dob'];
     $this->gender=$details['gender'];
     
    }
public function loadCampRequestForm()
{
  $this->view->render("campRequest");
}
    public function loadBRForm()
    {
   
      $this->view->render("blood_request");
    }
    public function addRequest()
    {
      
      if ($_SERVER["REQUEST_METHOD"]=="POST") {
        $_POST=filter_input_array(INPUT_POST,FILTER_SANITIZE_STRING);
        if (isset($_POST["sbmt_btn"])) {
           $dataArray=[
             "flname"=>$this->testInput($_POST["flname"]),
             
             "nic"=>$this->testInput($_POST["nic"]),
             "blood"=>$this->testInput($_POST["blood"]),
             "address"=>$this->testInput($_POST["address"]),
            
             
             "mobileNo"=>$this->testInput($_POST["num"]),
             "description"=>$this->testInput($_POST["description"]),
             "attachment"=>$this->testInput($_POST["att"]),
             "duedate"=>$this->testInput($_POST["duedate"]),

           ];
             $registerResult = $this->model->addbloodRequest($dataArray);
             if (empty($registerResult)) {
             
               $_SESSION['msg']="success";
               $this->view->render("blood_request");
           }else {
            
            $_SESSION['error']="failed";
           
            $this->view->render("blood_request");
           }
           
        }
    }
    }

    public function bloodPostLoad()
    {
       $post=new BloodPost();
       $post->Loadpostpage();

    }
    public function donationPlacesLoad()
    {
        $this->view->render('donatePlaces');
}

public function addCampRequest(){
  if ($_SERVER["REQUEST_METHOD"]=="POST") {
    $_POST=filter_input_array(INPUT_POST,FILTER_SANITIZE_STRING);
    if (isset($_POST["sbmt_btn"])) {
       $dataArray=[
         "name"=>$this->testInput($_POST["flname"]),
         
         "email"=>$this->testInput($_POST["email"]),
         "campDate"=>$this->testInput($_POST["duedate"]),
         "description"=>$this->testInput($_POST["description"]),
        
         
         "attachment"=>$this->testInput($_POST["att"]),
         "lat"=>$this->testInput($_POST["lat"]),
         "lng"=>$this->testInput($_POST["lng"]),
         
         "district"=>$this->testInput($_POST["district"]),
         "address"=>$this->testInput($_POST["address"]),
         "conNumber"=>$this->testInput($_POST["num"]),
         "dateTime"=>$this->testInput($_POST["duedate"]),

       ];
         $registerResult = $this->model->addCampRequest($dataArray);
         if (empty($registerResult)) {
         
           $_SESSION['msg']="success";
           $this->view->render("campRequest");
       }else {
        
        $_SESSION['error']="failed";
       
        $this->view->render("campRequest");
       }
       
    }
}
}

    public function viewUserProfile(){
      
      if ($_SESSION['nic']){
        
       
       $NIC = [
         "nic" => $_SESSION['nic'],
       ];
       
        $profileData = $this->model->getProfileData($NIC);
        
        $this->view->render("userViewProfile",$profileData);
      }
      
    }

    public function viewEditUserProfile(){
      
      if ($_SESSION['nic']){
        
       
       $NIC = [
         "nic" => $_SESSION['nic'],
       ];
       
        $profileData = $this->model->getProfileData($NIC);
        
        $this->view->render("userEditProfile",$profileData);
      }
      
    }

    public function userProfileUpdate(){
      if ($_SERVER["REQUEST_METHOD"]=="POST"){
        $_POST=filter_input_array(INPUT_POST,FILTER_SANITIZE_STRING);
    if (isset($_POST["save"]) && isset($_SESSION['nic'])){
      
      $dataArray=[
        "firstName"=>$this->testInput($_POST["fname"]),
        "lastName"=>$this->testInput($_POST["lname"]),
        
        "email"=>$this->testInput($_POST["email"]),
        "dob"=>$this->testInput($_POST["dob"]),
        "address"=>$this->testInput($_POST["address"]),
        "mobileNo"=>$this->testInput($_POST["mobileNo"]),
        "nic" =>  $_SESSION['nic'],
        

      ];
      $registerResult = $this->model->editProfile($dataArray);
      if (empty($registerResult)) {
        print_r("Hello world");
        $this->viewUserProfile();
      }
    }
      }
    }



}


?>