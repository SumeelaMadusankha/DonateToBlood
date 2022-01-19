<?php
include_once('Admin.php');
class BB_Coordinater extends Admin{
    function __construct()
    {
        parent:: __construct();
    }
    public function index()
    {
       $this->view->render("bbc_index");
    }
    public function viewOfficer_Data(){
        $officerData=$this->model->getOfficerData();
        $this->view->render("bbc_viewOfficer_Data",$officerData);
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
    public function view_Add_ShowOfficer(){
        $this->view->render("bbc_add_showOfficers");
    }
    public function viewAddBloodDetails(){
        $result_id=$this->model->getBoodId_type($_GET["id"]);
        $this->view->render("bbc_viewAddBloodDetails",$result_id);
    }
    public function updateBloodDetails(){
        if ($_SERVER["REQUEST_METHOD"]=="POST") {
            $_POST=filter_input_array(INPUT_POST,FILTER_SANITIZE_STRING);
            if (isset($_POST["add_blood_btn"])) {
               $blood_dataArray=[
                 "maximum_quantity"=>$this->testInput($_POST["m_quantity" ]),
                 "available_quantity"=>$this->testInput($_POST["a_quantity" ]),
                 "Distric"=>$this->testInput("Matara"),

                ];
               
            if(strlen($blood_dataArray["maximum_quantity"]) !=0 && strlen($blood_dataArray["available_quantity"]) !=0 ){
                
            }
                $registerResult1=$this->model->update_BloodDetails($blood_dataArray,$_GET["id"]);
               
               if (empty($registerResult1)) {
                   $this->showBloodData();
               } 
               
            }
        }
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
    public function getOfficerNIC(){
        if ($_SERVER["REQUEST_METHOD"]=="POST") {
            $_POST=filter_input_array(INPUT_POST,FILTER_SANITIZE_STRING);
            if (isset($_POST["search_b"])) {
                $nic_check=$this->testInput($_POST["inp_nic" ]);
                if(strlen($nic_check)!=10){
                    $_SESSION['ERROR'] = "Invalid NIC";
                    print_r("Invalid NIC");

                }
                else{
                    $result_check=$this->model->check_Officer_NICavailability($nic_check);
                    if($result_check){
                        print_r("Previously Added Officer");
                        $_SESSION['MSG'] = "Previously Added Officer";

                    }
                    else{
                        $this->view->render("bbc_AddOfficers",$nic_check);
                    }
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

    
    public function acceptBloodRequest()
    {
        
        $id=$this->testInput($_GET['id']);
        
        $res=$this->model->acceptBloodRequestModel($id);
        if (empty($res)) {
            $this->viewBloodRequests();
        }

    }
    public function declienBloodRequest()
    {

        $id=$this->testInput($_GET['id']);
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
        
        $res=$this->model->acceptCampRequestModel($id);
        if (empty($res)) {
            $this->viewCampRequests();
        }

    }
    public function declienCampRequest()
    {

        $id=$this->testInput($_GET['id']);
        $res=$this->model->declienCampRequestModel($id);
        if (empty($res)) {
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
}
