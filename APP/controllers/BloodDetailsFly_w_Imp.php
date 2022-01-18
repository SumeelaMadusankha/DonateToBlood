<?php
class BloodDetailsFly_w_Imp extends Controller
{


private $A_p_MAX;
private $A_p_AV;
private $A_n_MAX;
private $A_n_AV;
private $O_p_MAX;
private $O_p_AV;
private $O_n_MAX;
private $O_n_AV;
private $B_p_MAX;
private $B_p_AV;
private $B_n_MAX;
private $B_n_AV;
private $AB_p_AV;
private $AB_p_MAX;
private $AB_n_AV;
private $AB_n_MAX;
private $previous_Blood_details;
function __construct()
{
    parent:: __construct();
}



public function viewAddBloodDetails($id){
    $result_id=$this->model->getBoodId_type($id);
    $BloodGroup=$result_id[0]['BloodGroup'];
    switch ($BloodGroup) {
        case "AB-":

            $this->AB_n_AV=$result_id[0]['AvailableQuantity'];
            $this->AB_n_MAX=$result_id[0]['MaximumQuantity'];
            $this->previous_Blood_details=array("BloodGroup"=>$BloodGroup, "Maximum"=>$this->AB_n_MAX,"Available"=> $this->AB_n_AV);
          break;
        case "AB+":

            $this->AB_p_MAX=$result_id[0]['MaximumQuantity'];
            $this->AB_p_AV=$result_id[0]['AvailableQuantity'];
            $this->previous_Blood_details=array("BloodGroup"=>$BloodGroup, "Maximum"=>$this->AB_p_MAX,"Available"=> $this->AB_p_AV);
            break;
        case "B-":

            $this->B_n_AV=$result_id[0]['AvailableQuantity'];
            $this->B_n_MAX=$result_id[0]['MaximumQuantity'];
            $this->previous_Blood_details=array("BloodGroup"=>$BloodGroup, "Maximum"=>$this->B_n_MAX,"Available"=> $this->B_n_AV);
            break;
        case "B+":

            $this->B_p_MAX=$result_id[0]['MaximumQuantity'];
            $this->B_p_AV=$result_id[0]['AvailableQuantity'];
            $this->previous_Blood_details=array("BloodGroup"=>$BloodGroup, "Maximum"=>$this->B_p_MAX,"Available"=> $this->B_p_AV);
            break;
        case "A-":

            $this->A_n_AV=$result_id[0]['AvailableQuantity'];
            $this->A_n_MAX=$result_id[0]['MaximumQuantity'];
            $this->previous_Blood_details=array("BloodGroup"=>$BloodGroup, "Maximum"=>$this->A_n_MAX,"Available"=> $this->A_n_AV);
            break;
        case "A+":

            $this->A_p_MAX=$result_id[0]['MaximumQuantity'];
            $this->A_p_AV=$result_id[0]['AvailableQuantity'];
            $this->previous_Blood_details=array("BloodGroup"=>$BloodGroup, "Maximum"=>$this->A_p_MAX,"Available"=> $this->A_p_AV);
            break;
        case "O-":

            $this->O_n_AV=$result_id[0]['AvailableQuantity'];
            $this->O_n_MAX=$result_id[0]['MaximumQuantity'];
            $this->previous_Blood_details=array("BloodGroup"=>$BloodGroup, "Maximum"=>$this->O_n_MAX,"Available"=> $this->O_n_AV);
            break;
        case "O+":

            $this->O_p_AV=$result_id[0]['AvailableQuantity'];
            $this->O_p_MAX=$result_id[0]['MaximumQuantity'];
            $this->previous_Blood_details=array("BloodGroup"=>$BloodGroup, "Maximum"=>$this->O_p_MAX,"Available"=> $this->O_p_AV);
            break;
      }
//    $this->view->render("bbc_viewAddBloodDetails",$result_id);
}
public function view_AddBloodDetails(){
    $this->viewAddBloodDetails($_GET["id"]);
    $this->view->render("bbc_viewAddBloodDetails",$this->previous_Blood_details);
}



}


