<?php
include_once("Person.php");
include_once("BloodPost.php");

abstract class User extends Person{


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
public function downloadFile()
{
 if (!empty($_GET['file'])) {
  $fileName= basename($_GET['file']);
  $filePath= "Files/". $fileName;
  if (!empty(($fileName) && file_exists($filePath))) {
    header('Content-Description: File Transfer');
    header('Content-Type: application/octet-stream');
    header('Content-Disposition: attachment; filename="'.$fileName.'"');
    header('Expires: 0');
    header('Cache-Control: must-revalidate');
    header('Pragma: public');
    header('Content-Length: ' . filesize($fileName));
    readfile($fileName);
    exit;
  }else {
    echo "file not found";
  }
 }
}
abstract public function loadBloodPost();
abstract public function loadCampPost();

   

}


?>