<?php
include_once('User_Model.php');
    class RegisteredUser_model extends User_Model 
    {
        function __construct()
        {
           parent::__construct();
        }


        public function getRegisteredUserData($nic)
        {
            $query = 'SELECT * FROM user where nic = :nic';
            $res= $this->db->runQuery($query,[":nic"=>$nic]);
            return $res;
        }
        public function addbloodRequest($dataArray)
    {
   
        $fulName=$dataArray["flname"];
        $nic=$dataArray["nic"];
        $blood=$dataArray["blood"];
        $description=$dataArray["description"];
        $attachment=$dataArray["attachment"];
        $duedate=$dataArray["duedate"];
        $status="pending";
        
        $mobileNo=$dataArray["mobileNo"];
        
       
       $queryAdd="INSERT INTO bloodrequest (nic, bloodType, description, attachment, status, fullName,dueDate,mobileNo) VALUES (:nic, :bloodType, :description, :attachment, :status, :fullName,:dueDate,:mobileNo)";

       $arrayInject=[
        ":nic"=>$nic, ":bloodType"=>$blood, ":description"=>$description, ":attachment"=>$attachment, ":status"=>$status, ":fullName"=>$fulName,":dueDate"=>$duedate,":mobileNo"=>$mobileNo];

        $results1= $this->db->runQuery($queryAdd,$arrayInject);
     
        return $results1;
    }
    }
    
?>