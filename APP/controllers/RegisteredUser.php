<?php
include_once('User.php');
include_once('BloodPost.php');
include_once('Observer.php');
include_once('CampPost.php');
include_once('EmailClient.php');
class RegisteredUser extends User implements Observer
{
private $city;
private $bloodGroup;
private $dateOfBirth;
private $subject;
private $body;
private $mailClient;
  function __construct()
  {
    parent::__construct(); 
    $this->mailClient=EmailClient::getInstance();
  }


    public function getSubject()
    {
        return $this->subject;
    }


    public function setSubject($subject)
    {
        $this->subject = $subject;
    }

    public function getBody()
    {
        return $this->body;
    }


    public function setBody($body)
    {
        $this->body = $body;
    }
  public function index()
  {
    if (isset($_SESSION['nic'])) {
      $this->view->render("index");
    }else {
      header("Location:../");
    }
     
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


    public function handle()
    {

      $this->mailClient->setRecieverAddress($this->getEmail());
      $this->mailClient->setSubject($this->getSubject());
      $this->mailClient->setMessageBody($this->getBody());
      $this->mailClient->sendMail();
    }
}


?>