<?php
class BB_Coordinater extends Controller{

    public function index()
    {
       $this->view->render("bbc_index");
    }
    public function viewDashboard(){
        $this->view->render("bbc_Dashboard");
    }
    public function viewBloodRequests(){
        $this->view->render("bbc_BloodRequests");
    }
    public function viewCampRequests(){
        $this->view->render("bbc_Donation-Camp-Requests");
    }
   
    public function viewRegisterDonor(){
        $this->view->render("bbc_Register_Donor");
    }
    public function viewUpdateDonorDetails(){
        $this->view->render("bbc_Update-Donor");
    }
    public function viewUserData(){
        $this->view->render("bbc_viewUserData");
    }
    public function viewAddBloodDetails(){
        $result_id=$this->model->getBoodId_type($_GET["id"]);
        $this->view->render("bbc_viewAddBloodDetails",$result_id);
    }
    public function updateUserHistory(){

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
               
               
                $registerResult1=$this->model->update_BloodDetails($blood_dataArray,$_GET["id"]);
               
               if (empty($registerResult1)) {
                   $this->showBloodData();
               } 
               
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
}
?>