<?php
include_once('Admin.php');
include_once('EmailClient.php');
session_start();
class BB_Coordinater extends Admin{
    private  $cordinatorId;


    function __construct()
    {
        parent:: __construct();
    }

    public function getCordinatorId()
    {
        return $this->cordinatorId;
    }
    public function setCordinatorId($cordinatorId)
    {
        $this->cordinatorId = $cordinatorId;
    }






    public function index()
    {
       $this->view->render("bbc_index");
    }
    public function viewDashboard(){
        $reg_res = $this->model->getStaticticalbloodprogress();
        if(!empty($reg_res)){
            $this->view->render("bbc_Dashboard",$reg_res);
        }
    }
    public function viewMessageLayer(){
        $this->view->render("bbc_createMessage");
        
    }
    public function viewAddOfficerLayer(){
        $this->view->render("bbc_AddOfficers");
    }
    public function viewBloodRequests(){
        $request=$this->model->getBloodReqest();

        $this->view->render("bbc_BloodRequests",$request);
    }
    public function viewCampRequests(){
        $request=$this->model->getCampReqest();
        $this->view->render("bbc_Donation-Camp-Requests",$request);
    }
    
   
    public function viewRegisterDonor(){
        $this->view->render("bbc_Register_Donor");
    }
    public function viewUpdateDonorDetails(){
        $this->view->render("bbc_Update-Donor",array("status"=>false, "nic"=>""));
    }
    public function viewUserData(){
        $this->view->render("bbc_viewUserData");
    }
    public function viewAddBloodDetails(){
        $result_id=$this->model->getBoodId_type($_GET["id"]);
        $this->view->render("bbc_viewAddBloodDetails",$result_id);
    }
    public function updateUserBloodRecord(){
        if ($_SERVER["REQUEST_METHOD"]=="POST") {
            $_POST=filter_input_array(INPUT_POST,FILTER_SANITIZE_STRING);
            if (isset($_POST["search_b"])) {
                $nic_check=$this->testInput($_POST["inp_nic" ]);
                $result_check=$this->model->checkNICavailability($nic_check);
                if ($result_check) {
                    $this->view->render("bbc_Update-Donor",array("status"=>$result_check, "nic"=>$nic_check));

                }
                else {
                    $this->viewRegisterDonor();

                }
            }

        }
    }
    public function updateDonorRecord(){
        if ($_SERVER["REQUEST_METHOD"]=="POST") {
            $_POST=filter_input_array(INPUT_POST,FILTER_SANITIZE_STRING);
            if (isset($_POST["update_b"])) {
                $dataArray=[
                    "donate_date"=>$this->testInput($_POST["d_date" ]),
                    "donate_centre"=>$this->testInput($_POST["d_centre" ]),
                ];
                $record = $this->model->addDonatingRecord($dataArray,$_GET["nic"]);
        }

    }}

    public function updateBloodDetails(){
        if ($_SERVER["REQUEST_METHOD"]=="POST") {
            $_POST=filter_input_array(INPUT_POST,FILTER_SANITIZE_STRING);
            if (isset($_POST["add_blood_btn"])) {
               $blood_dataArray=[
                 "maximum_quantity"=>$this->testInput($_POST["m_quantity" ]),
                 "available_quantity"=>$this->testInput($_POST["a_quantity" ]),
                 "Distric"=>$this->testInput("Matara"),

                ];
               
               
                $registerResult1=$this->model->update_BloodDetails($blood_dataArray,$_GET["id"]);
               
               if (empty($registerResult1)) {
                   $this->showBloodData();
               } 
               
            }
        }
    }
    public function acceptBloodRequest()
    {
        
        $id=$this->testInput($_GET['id']);
        $nic=$this->testInput($_GET['nic']);
        $name=$this->model->getUserName($nic)[0];
        $res=$this->model->acceptCampRequestModel($id);
        $subject="Your Blood request has been accepted";
        $body= "<p>Dear {$name['firstName']} {$name['lastName']},<br> Your request has been accepted and Posted on our site.You also can see it</p>";
        $mail = new EmailClient($name['email'],$subject,$body);
        $mail->sendMail();
        $res=$this->model->acceptBloodRequestModel($id);
        if (empty($res)) {
            $this->viewBloodRequests();
        }

    }
    public function declienBloodRequest()
    {

        $id=$this->testInput($_GET['id']);

        $nic=$this->testInput($_GET['nic']);
        $name=$this->model->getUserName($nic)[0];
        
        $subject="Your Blood request has been declined";
        $body= "<p>Dear {$name['firstName']} {$name['lastName']},<br> Your Blood request has been declined Because of details you have submited not sufficient.Pleace fill and submit form again with the correct details</p>";
        $mail = new EmailClient($name['email'],$subject,$body);
        $mail->sendMail();
        $res=$this->model->declienBloodRequestModel($id);
        if (empty($res)) {
            $_SESSION["decline"]="decline";
           $this->viewBloodRequests();
        }
    }
    public function cancelBloodRequest()
    {
        $id=$this->testInput($_GET['id']);
        $res=$this->model->cancelBloodRequestModel($id);
        if (empty($res)) {
            
           $this->viewBloodRequests();
        }
    }
    public function addDonor()
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
              }
              if (empty($registerResult)) {
                $this->view->render("bbc_index");
              }
              
           }
       }
    }
    public function addOfficer()
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
                $registerResult = $this->model->OfficerRegister($dataArray);
              }
              if (empty($registerResult)) {
                $this->view->render("bbc_index");
              }
              
           }
       }
    }
    public function showUserData(){
        $registerResult2 = $this->model->getData();
        // print_r($registerResult2);
        if(!empty($registerResult2)){
            $this->view->render("bbc_viewUserData",$registerResult2);
        
        }
    }
    public function showRequestData()
    {
        $registerResult3 = $this->model->getR_Data();
        // print_r($registerResult2);
        if(!empty($registerResult3)){
            $this->view->render("bbc_viewRequestData",$registerResult3);
        
        }
    }
    public function showBloodData(){
        $registerResult4 = $this->model->getBloodData();
        if(!empty($registerResult4)){
            $this->view->render("bbc_Shoratage",$registerResult4);
        }
        
    }


    public function acceptCampRequest()
    {
     
        $id=$this->testInput($_GET['id']);
        $nic=$this->testInput($_GET['nic']);
        $name=$this->model->getUserName($nic)[0];
        
        $res=$this->model->acceptCampRequestModel($id);
       
        $body= "<p>Dear {$name['firstName']} {$name['lastName']},<br> Your request has been accepted and Posted on our site.You also can see it</p>";
        
       
        if (empty($res)) {
            $mail = new EmailClient($name['email'],"Your camp request has been accepted",$body);
            
            $mail->sendMail();
            $this->viewCampRequests();
        }

    }
    public function declienCampRequest()
    {

        $id=$this->testInput($_GET['id']);
        $nic=$this->testInput($_GET['nic']);
        $name=$this->model->getUserName($nic)[0];
        $body= "<p>Dear {$name['firstName']} {$name['lastName']},<br> Your camp request has been declined Because of details you have submited not sufficient.Pleace fill and submit form again with the correct details</p>";
        $res=$this->model->declienCampRequestModel($id);
        if (empty($res)) {
            $mail = new EmailClient($name['email'],"Your camp request has been declined",$body);
            
            $mail->sendMail();
            $_SESSION["decline"]="decline";
           $this->viewCampRequests();
        }
    }
    public function cancelCampRequest()
    {
        $id=$this->testInput($_GET['id']);
        $res=$this->model->cancelCampRequestModel($id);
        if (empty($res)) {
            
           $this->viewCampRequests();
        }
    }
    public function downloadFile()
{
 if (!empty($_GET['file'])) {
  $fileName= basename($_GET['file']);
  $filePath= "Files/". $fileName;
  if (!empty(($fileName) && file_exists($filePath))) {
    
    header('Content-Description: File Transfer');
    header('Content-Type: application/octet-stream');
    header('Content-Disposition: attachment; filename=' .$fileName);
    header("Content-Transfer-Encoding: binary");
    header('Expires: 0');
    header('Cache-Control: must-revalidate');
    header('Pragma: public');
   
    readfile($filePath);
    exit();
  }else {
    echo "file not found";
  }
 }
}

}
