<?php
class BloodRequest_model extends Model 
{
    function __construct()
    {
        parent:: __construct();
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