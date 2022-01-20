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
    $postColection=new PostCollection();
    foreach($res as $row){
        $postColection->addPost($row);
        
    }

    if (!empty($res)) {
        $this->view->render("donatePlaces", $postColection);
    }else {
        $this->view->render("donatePlaces", $postColection);
    }
    
    }else {
     
        $res=$this->model->getcampRequestDetails("all");
        $postColection=new PostCollection();
        foreach($res as $row){
            $postColection->addPost($row);
            
        }
    if (!empty($res)) {
        $this->view->render("donatePlaces", $postColection);
    }else {
        $this->view->render("donatePlaces", $postColection);
    }

}


    }
    public function filterPost($dataArray)
    {
        $this->loadModel("CampPost");
        
       
        $res=$this->model->filterCampPost($dataArray);
        $postColection=new PostCollection();
        foreach($res as $row){
            $postColection->addPost($row);
            
        }
        $this->view->render("donatePlaces", $postColection);
        exit();
    }
    public function expiredPost($district){
        $date=date("Y-m-d");
        $this->loadModel('CampPost');
        $resultarr=$this->model-> expieredCampPost($date,$district);

        
    }
}




?>