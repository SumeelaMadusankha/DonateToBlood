<?php
declare(strict_types=1);

include_once('Post.php');


class BloodPost extends Post
{

   

    function __construct()
    {
        parent:: __construct();
    }

    public function Loadpostpage()
    {
      $this->loadModel("BloodPost");
    // $res=$this->model->getBloodRequestDetails("Matara"); 
    // $this->view->render("bloodPost",$res);
          
          
   if (isset($_SESSION['nic'])) {
   
       $district=$_SESSION['district'];
    $res=$this->model->getBloodRequestDetails($district);
    if (!empty($res)) {
        $this->view->render("bloodPost",$res);
    }else {
        $this->view->render("bloodPost",$res);
    }
    
    }else {
     
        $res=$this->model->getBloodRequestDetails("all");
    if (!empty($res)) {
        $this->view->render("bloodPost",$res);
    }else {
        $this->view->render("bloodPost",$res);
    }
    
    







}


    }
    public function filterPost($dataArray)
    {
        $this->loadModel("BloodPost");
       
        $resultarr=$this->model->filterBloodPost($dataArray);
      
        $this->view->render("bloodPost",$resultarr);
    }
}
?>