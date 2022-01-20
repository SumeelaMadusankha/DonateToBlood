<?php
declare(strict_types=1);

include_once('Post.php');
include_once('PostCollection.php');

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
    $postColection=new PostCollection();
    foreach($res as $row){
        $postColection->addPost($row);
        
    }

    if (!empty($res)) {
        $this->view->render("bloodPost",$postColection);
    }else {
        $this->view->render("bloodPost",$postColection);
    }
    
    }else {
     
        $res=$this->model->getBloodRequestDetails("all");
        $postColection=new PostCollection();
    foreach($res as $row){
        $postColection->addPost($row);
        
    }
    if (!empty($res)) {
        $this->view->render("bloodPost",$postColection);
    }else {
        $this->view->render("bloodPost",$$postColection);
    }
    
    







}


    }
    public function filterPost($dataArray)
    {
        $this->loadModel("BloodPost");
       
        $resultarr=$this->model->filterBloodPost($dataArray);
        $postColection=new PostCollection();
        foreach( $resultarr as $row){
            $postColection->addPost($row);
            
        }
        $this->view->render("bloodPost",$postColection);
    }
  public function expiredPost($district){
    $date=date("Y-m-d");
    $this->loadModel('BloodPost');
    $resultarr=$this->model-> expieredBloodPost($date,$district);
  }
}
?>