<?php
include_once('Post.php');
class BloodPost extends Post
{

   

    function __construct()
    {
        parent:: __construct();
    }

    public function Loadpostpage()
    {

   if (isset($_SESSION['nic'])) {
    $this->view->render("bloodPost");
    







   }
    
}



}
?>