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
private $previous_Blood_details_1;
private $previous_Blood_details_2;
private $previous_Blood_details_3;
private $previous_Blood_details_4;
private $previous_Blood_details_5;
private $previous_Blood_details_6;
private $previous_Blood_details_7;
private $previous_Blood_details_8;
function __construct()
{
    parent:: __construct();
}



public  function viewAddBloodDetails($BloodGroup,$Av_Quantity,$Max_Quantity){
    print_r($BloodGroup);
    print_r($Max_Quantity);
    switch ($BloodGroup) {
        case "AB-":

            $this->AB_n_AV=$Av_Quantity;
            $this->AB_n_MAX=$Max_Quantity;
            $this->previous_Blood_details_1=array("BloodGroup"=>$BloodGroup, "Maximum"=>$this->AB_n_MAX,"Available"=> $this->AB_n_AV);
          break;
        case "AB+":

            $this->AB_p_MAX=$Max_Quantity;
            $this->AB_p_AV=$Av_Quantity;
            $this->previous_Blood_details_2=array("BloodGroup"=>$BloodGroup, "Maximum"=>$this->AB_p_MAX,"Available"=> $this->AB_p_AV);
            break;
        case "B-":

            $this->B_n_AV=$Av_Quantity;
            $this->B_n_MAX=$Max_Quantity;
            $this->previous_Blood_details_3=array("BloodGroup"=>$BloodGroup, "Maximum"=>$this->B_n_MAX,"Available"=> $this->B_n_AV);
            break;
        case "B+":

            $this->B_p_MAX=$Max_Quantity;
            $this->B_p_AV=$Av_Quantity;
            $this->previous_Blood_details_4=array("BloodGroup"=>$BloodGroup, "Maximum"=>$this->B_p_MAX,"Available"=> $this->B_p_AV);
            break;
        case "A-":

            $this->A_n_AV=$Av_Quantity;
            $this->A_n_MAX=$Max_Quantity;
            $this->previous_Blood_details_5=array("BloodGroup"=>$BloodGroup, "Maximum"=>$this->A_n_MAX,"Available"=> $this->A_n_AV);
            break;
        case "A+":

            $this->A_p_MAX=$Max_Quantity;
            $this->A_p_AV=$Av_Quantity;
            $this->previous_Blood_details_6=array("BloodGroup"=>$BloodGroup, "Maximum"=>$this->A_p_MAX,"Available"=> $this->A_p_AV);
            break;
        case "O-":

            $this->O_n_AV=$Av_Quantity;
            $this->O_n_MAX=$Max_Quantity;
            $this->previous_Blood_details_7=array("BloodGroup"=>$BloodGroup, "Maximum"=>$this->O_n_MAX,"Available"=> $this->O_n_AV);
            break;
        case "O+":

            $this->O_p_AV=$Av_Quantity;
            $this->O_p_MAX=$Max_Quantity;
            $this->previous_Blood_details_8=array("BloodGroup"=>$BloodGroup, "Maximum"=>$this->O_p_MAX,"Available"=> $this->O_p_AV);
            break;
      }
//    $this->view->render("bbc_viewAddBloodDetails",$result_id);
}
public function view_AddBloodDetails(){
    $bloodID=$_GET["id"];
    $result_id=$this->model->getBoodId_type($bloodID);
    $BloodGroup=$result_id[0]['BloodGroup'];
    switch ($BloodGroup) {
        case "AB-":
            print_r($this->previous_Blood_details_1);
            $this->view->render("bbc_viewAddBloodDetails",$this->previous_Blood_details_1);
            break;
        case "AB+":
            $this->view->render("bbc_viewAddBloodDetails",$this->previous_Blood_details_2);


        case "B-":
            $this->view->render("bbc_viewAddBloodDetails",$this->previous_Blood_details_3);


        case "B+":
            $this->view->render("bbc_viewAddBloodDetails",$this->previous_Blood_details_4);
            break;
        case "A-":
            $this->view->render("bbc_viewAddBloodDetails",$this->previous_Blood_details_5);
            break;
        case "A+":

            $this->view->render("bbc_viewAddBloodDetails",$this->previous_Blood_details_6);
            break;
        case "O-":

            $this->view->render("bbc_viewAddBloodDetails",$this->previous_Blood_details_7);
            break;
        case "O+":

            $this->view->render("bbc_viewAddBloodDetails",$this->previous_Blood_details_8);
            break;
    }

}



}


