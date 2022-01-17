<?php
include_once('User.php');
include_once('BloodPost.php');

include_once('CampPost.php');

class RegisteredUser extends User 
{
private $city;
private $bloodGroup;
private $dateOfBirth;
  function __construct()
  {
    parent::__construct(); 
    
  }

    public function setBloodGroup($bloodGroup)
    {
        $this->bloodGroup = $bloodGroup;
    }

    public function setDateOfBirth($dateOfBirth)
    {
        $this->dateOfBirth = $dateOfBirth;
    }
    public function getCity()
    {
        return $this->city;
    }

    public function setCity($city)
    {
        $this->city = $city;
    }

    public function getBloodGroup()
    {
        return $this->bloodGroup;
    }

    public function getDateOfBirth()
    {
        return $this->dateOfBirth;
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
             
             "nic"=>$_SESSION['nic'],
             "blood"=>$this->testInput($_POST["blood"]),
             "address"=>$this->testInput($_POST["address"]),
            
             
             "mobileNo"=>$this->testInput($_POST["num"]),
             "description"=>$this->testInput($_POST["description"]),
             "attachment"=>$this->testInput($_FILES["att"]["name"]),
             "duedate"=>$this->testInput($_POST["duedate"]),
           

           ];
          
           $fileTempName=$_FILES["att"]["tmp_name"];
           $path="Files/".$dataArray['attachment'];
             $registerResult = $this->model->addbloodRequest($dataArray);
             if (empty($registerResult)) {
             move_uploaded_file($fileTempName,$path);
               $_SESSION['msg']="success";
               print_r($dataArray);
               header("Location: http://localhost/DonateToBlood/RegisteredUser/loadBRForm");

           }else {
            
            $_SESSION['error']="failed";
           $this->view->render("blood_request");
           }
           
        }
    }
    }

    public function loadBloodPost()
    {
      $post=new BloodPost();
      if ($_SERVER["REQUEST_METHOD"]=="POST") {
        $_POST=filter_input_array(INPUT_POST,FILTER_SANITIZE_STRING);
        if (isset($_POST["sbmt_btn"])) {
          $post->filterPost($_POST);
        }}else {
          $post->Loadpostpage();
        }
       
      

    }
    public function loadCampPost()
    {
      $post=new CampPost();
      if ($_SERVER["REQUEST_METHOD"]=="POST") {
        $_POST=filter_input_array(INPUT_POST,FILTER_SANITIZE_STRING);
        if (isset($_POST["sbmt_btn"])) {
          $post->filterPost($_POST);
        }}else {
          $post->Loadpostpage();
        }
       
      
      
}

public function addCampRequest(){
  if ($_SERVER["REQUEST_METHOD"]=="POST") {
    $_POST=filter_input_array(INPUT_POST,FILTER_SANITIZE_STRING);
    if (isset($_POST["sbmt_btn"])) {
       $dataArray=[
         "name"=>$this->testInput($_POST["flname"]),
         
         "email"=>$_SESSION['email'],
         "campDate"=>$this->testInput($_POST["duedate"]),
         "description"=>$this->testInput($_POST["description"]),
        
         
         "attachment"=>$this->testInput($_FILES["att"]["name"]),
         "lat"=>$this->testInput($_POST["lat"]),
         "lng"=>$this->testInput($_POST["lng"]),
         
         "district"=>$this->testInput($_POST["district"]),
         "address"=>$this->testInput($_POST["address"]),
         "conNumber"=>$this->testInput($_POST["num"]),
         "dateTime"=>$this->testInput($_POST["duedate"]),

       ];
       $fileTempName=$_FILES["att"]["tmp_name"];
       $path="Files/".$dataArray['attachment'];
         $registerResult = $this->model->addCampRequest($dataArray);
         if (empty($registerResult)) {
         move_uploaded_file($fileTempName,$path);
           $_SESSION['msg']="success";
            header("Location: http://localhost/DonateToBlood/RegisteredUser/loadCampRequestForm");
       }else {
        
        $_SESSION['error']="failed";
       
        $this->view->render("campRequest");
       }
       
    }
}
}


public function donationHistoryLoad(){
  $nic=$_SESSION['nic'];
  $user_details = $this->model->viewDonorHistory($nic);
  $this->view->render("reg_user_viewHistory");

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
        
        $this->viewUserProfile();
      }
    }
      }
    }





}


?>