<?php
include_once('Admin.php');
session_start();
class B_officer extends Admin{
    private $officerId;


    function __construct()
    {
        parent:: __construct();
    }

    public function getOfficerId()
    {
        return $this->officerId;
    }

    public function setOfficerId($officerId)
    {
        $this->officerId = $officerId;
    }




    public function index()

    {
        $result_id=$this->model->getLoggedData($_SESSION["nic"]);
       $this->view->render("bo_index",$result_id);
    }
    public function viewDashboard(){
        $this->view->render("bo_Dashboard");
        
        
    }
    public function viewUpdateDonorDetails(){
        $this->view->render("bo_Update-Donor",array("status"=>false, "nic"=>""));
    }
    public function viewUserData(){
        $this->view->render("bo_viewUserData");
    }
    public function viewAddBloodDetails(){
        $result_id=$this->model->getBoodId_type($_GET["id"]);
        $this->view->render("bo_viewAddBloodDetails",$result_id);
    }
    
    public function updateUserBloodRecord(){
        if ($_SERVER["REQUEST_METHOD"]=="POST") {
            $_POST=filter_input_array(INPUT_POST,FILTER_SANITIZE_STRING);
            if (isset($_POST["search_b"])) {
                $nic_check=$this->testInput($_POST["inp_nic" ]);
                if(strlen($nic_check)!=10){
                    $_SESSION['ERROR'] = "Invalid NIC";
                    print_r("Invalid NIC");
                    
                }
                else{
                    $result_check=$this->model->checkNICavailability($nic_check);
                    if($result_check){
                    $_SESSION['MSG'] = "Previously Registered User";   
                    $this->view->render("bo_Update-Donor",array("status"=>$result_check, "nic"=>$nic_check));
                    }
                    else{
                        $this->view->render("bo_Register_Donor",$nic_check);
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
                "password"=>$this->testInput($_POST["password"]),
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

                $hashed_password = password_hash($dataArray["password"], PASSWORD_DEFAULT);
                $dataArray["password"] = $hashed_password;
                  
                $registerResult = $this->model->userRegister($dataArray);

              }
              if (empty($registerResult)) {
                $this->view->render("bo_index");
              }
              
           }
       }
    }
    public function showUserData(){
        $registerResult2 = $this->model->getData();
       
        if(!empty($registerResult2)){
            $this->view->render("bo_viewUserData",$registerResult2);
        
        }
    }
    public function findLoggedDistric(){

    }
}
