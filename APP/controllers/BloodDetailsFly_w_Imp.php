<?php
class BloodDetailsFly_w_Imp extends Controller
{


private float $A_p_MAX=0.0;
private float $A_p_AV=0.0;
private float $A_n_MAX=0.0;
private float $A_n_AV=0.0;
private float $O_p_MAX=0.0;
private float $O_p_AV=0.0;
private float $O_n_MAX=0.0;
private float $O_n_AV=0.0;
private float $B_p_MAX=0.0;
private float $B_p_AV=0.0;
private float $B_n_MAX=0.0;
private float $B_n_AV=0.0;
private float $AB_p_AV=0.0;
private float $AB_p_MAX=0.0;
private float $AB_n_AV=0.0;
private float $AB_n_MAX=0.0;
public array $previous_Blood_details=array("BloodGroup"=>'AB-', "Maximum"=>0.0,"Available"=>0.0);

function __construct()
{
    parent:: __construct();
}



public  function viewAddBloodDetails($BloodGroup,$Av_Quantity,$Max_Quantity){
    switch ($BloodGroup) {
        case "AB-":

            $this->AB_n_AV=$Av_Quantity;
            $this->AB_n_MAX=$Max_Quantity;
            $this->previous_Blood_details=array("BloodGroup"=>$BloodGroup, "Maximum"=>$this->AB_n_MAX,"Available"=> $this->AB_n_AV);

          break;
        case "AB+":

            $this->AB_p_MAX=$Max_Quantity;
            $this->AB_p_AV=$Av_Quantity;
            $this->previous_Blood_details=array("BloodGroup"=>$BloodGroup, "Maximum"=>$this->AB_p_MAX,"Available"=> $this->AB_p_AV);
            break;
        case "B-":

            $this->B_n_AV=$Av_Quantity;
            $this->B_n_MAX=$Max_Quantity;
            $this->previous_Blood_details=array("BloodGroup"=>$BloodGroup, "Maximum"=>$this->B_n_MAX,"Available"=> $this->B_n_AV);
            break;
        case "B+":

            $this->B_p_MAX=$Max_Quantity;
            $this->B_p_AV=$Av_Quantity;
            $this->previous_Blood_details=array("BloodGroup"=>$BloodGroup, "Maximum"=>$this->B_p_MAX,"Available"=> $this->B_p_AV);
            break;
        case "A-":

            $this->A_n_AV=$Av_Quantity;
            $this->A_n_MAX=$Max_Quantity;
            $this->previous_Blood_details=array("BloodGroup"=>$BloodGroup, "Maximum"=>$this->A_n_MAX,"Available"=> $this->A_n_AV);
            break;
        case "A+":

            $this->A_p_MAX=$Max_Quantity;
            $this->A_p_AV=$Av_Quantity;
            $this->previous_Blood_details=array("BloodGroup"=>$BloodGroup, "Maximum"=>$this->A_p_MAX,"Available"=> $this->A_p_AV);
            break;
        case "O-":

            $this->O_n_AV=$Av_Quantity;
            $this->O_n_MAX=$Max_Quantity;
            $this->previous_Blood_details=array("BloodGroup"=>$BloodGroup, "Maximum"=>$this->O_n_MAX,"Available"=> $this->O_n_AV);
            break;
        case "O+":

            $this->O_p_AV=$Av_Quantity;
            $this->O_p_MAX=$Max_Quantity;
            $this->previous_Blood_details=array("BloodGroup"=>$BloodGroup, "Maximum"=>$this->O_p_MAX,"Available"=> $this->O_p_AV);
            break;
      }
    $this->showBloodData();
}
    public function showBloodData(){
        $this->loadModel("BloodDetailsFly_w_Imp");
        $registerResult4 = $this->model->getBloodData();
        if(!empty($registerResult4)){
            $this->view->render("bbc_Shoratage", array("data"=>$registerResult4, "updated_arr"=>$this->previous_Blood_details));
        }

    }

}






