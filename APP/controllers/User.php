<?php
include_once("Person.php");
include_once("BloodPost.php");
session_start();
class User extends Person{
    
    private $bloodGroup;
    private $District;
    private $MobileNo;
    private $email;
   
    private $address;
    private $dateOfBirth;
    private $gender;
   
    function __construct()
    {
       parent::__construct();
    }

    public function filterBloodPost()
{
  if ($_SERVER["REQUEST_METHOD"]=="POST") {
    $_POST=filter_input_array(INPUT_POST,FILTER_SANITIZE_STRING);
    
    if (isset($_POST["search"])) {

      $arr=['bloodType'=>$_POST['bloodType'],'district'=>$_POST['district']];
    
      $post =new BloodPost();
      $post->filterPost($arr);



}}
}
   
    

public function filterCampPost()
{
  if ($_SERVER["REQUEST_METHOD"]=="POST") {
    $_POST=filter_input_array(INPUT_POST,FILTER_SANITIZE_STRING);
    
    if (isset($_POST["search"])) {

      $arr=['district'=>$_POST['district']];
    
      $post =new CampPost();
      $post->filterPost($arr);



}}
}
   

   

}


?>