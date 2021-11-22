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
    public function viewShortageBloodTypes(){
        $this->view->render("bbc_Shoratage");
    }
    public function viewRegisterDonor(){
        $this->view->render("bbc_Register_Donor");
    }
    public function viewUpdateDonorDetails(){
        $this->view->render("bbc_Update-Donor");
    }
    public function addDonor(){

    }
    
    
}
?>