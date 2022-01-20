<?php
include_once('Request.php');
class BloodRequest extends Request 
{
    private $requestedBloodType;
    private $dueDateToRecieve;

    function __construct()
    {
        parent::__construct();
    }

    public function getRequestedBloodType()
    {
        return $this->requestedBloodType;
    }

    public function setRequestedBloodType($requestedBloodType)
    {
        $this->requestedBloodType = $requestedBloodType;
    }

    public function getDueDateToRecieve()
    {
        return $this->dueDateToRecieve;
    }


    public function setDueDateToRecieve($dueDateToRecieve)
    {
        $this->dueDateToRecieve = $dueDateToRecieve;
    }


   public function addRequest(){
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

               header("Location: http://localhost/DonateToBlood/RegisteredUser/loadBRForm");

           }else {
            
            $_SESSION['error']="failed";
           $this->view->render("blood_request");
           }
           
        }
   }

}}

?>