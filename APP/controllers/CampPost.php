<?php
include_once('post.php');
class CampPost extends Post
{

    

    function __construct()
    {
        parent:: __construct();
    }



    public function Loadpostpage()
    {
      $this->loadModel("CampPost");
    // $res=$this->model->getBloodRequestDetails("Matara"); 
    // $this->view->render("bloodPost",$res);
          
          
   if (isset($_SESSION['nic'])) {
   
       $district=$_SESSION['district'];
    $res=$this->model->getCampRequestDetails($district);
    if (!empty($res)) {
        $this->view->render("donatePlaces",$res);
    }
    
    }else {
     
        $res=$this->model->getcampRequestDetails("all");
    if (!empty($res)) {
        $this->view->render("donatePlaces",$res);
    }
    
    







}


    }
    public function filterPost($dataArray)
    {
        $this->loadModel("CampPost");
        
       
        $resultarr=$this->model->filterCampPost($dataArray);
      
        $this->view->render("donatePlaces",$resultarr);
    }
}




?>