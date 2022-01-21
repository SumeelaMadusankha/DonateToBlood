<?php
include "BloodDetailsFactory.php";
session_start();
class BloodDetails extends  Controller{
    private $bloodD_Fly_w_Imp;
    function __construct()
    {
        parent:: __construct();
    }

    public function updateBloodDetails(){


        if ($_SERVER["REQUEST_METHOD"]=="POST") {
            $_POST=filter_input_array(INPUT_POST,FILTER_SANITIZE_STRING);
            if (isset($_POST["add_blood_btn"])) {
                $blood_dataArray=[
                    "maximum_quantity"=>$this->testInput($_POST["m_quantity" ]),
                    "available_quantity"=>$this->testInput($_POST["a_quantity" ]),


                ];
                $bloodID=$_GET["id"];
                if(strlen($blood_dataArray["maximum_quantity"]) !=0 && strlen($blood_dataArray["available_quantity"]) !=0 && ($blood_dataArray["maximum_quantity"]) >= $blood_dataArray["available_quantity"]){
                   
                    $registerResult1=$this->model->update_BloodDetails($blood_dataArray,$bloodID);
    
                    $result_id=$this->model->getBoodId_type($bloodID);
                    $BloodGroup=$result_id[0]['BloodGroup'];
                    $Av_Quantity=$result_id[0]['AvailableQuantity'];
                    $Max_Quantity=$result_id[0]['MaximumQuantity'];
                     if (empty($registerResult1)) {

                    
                    $this->bloodD_Fly_w_Imp=BloodDetailsFactory::getBloodDetailsImp();

                    $this->bloodD_Fly_w_Imp->viewAddBloodDetails($BloodGroup,$Av_Quantity,$Max_Quantity);
//                    $this->showBloodData();
                }
                }else {
                    $_SESSION['error']="error";
                    header("Location:http:../BB_Coordinater/viewAddBloodDetails?id={$bloodID}"); 
                }
               


               

            }
        }

    }
//    public function showBloodData(){
//        $registerResult4 = $this->model->getBloodData();
//        if(!empty($registerResult4)){
//            $this->view->render("bbc_Shoratage",$registerResult4);
//        }
//
//    }
}
