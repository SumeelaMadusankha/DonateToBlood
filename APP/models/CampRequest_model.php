<?php
class CampRequest_model extends Model 
{
    function __construct()
    {
        parent:: __construct();
    }
    public function addCampRequest($dataArray)
    {
   
        $name=$dataArray["name"];
        $email=$dataArray["email"];
        $campDate=$dataArray["campDate"];
        $description=$dataArray["description"];
        $attachment=$dataArray["attachment"];
        $lat=$dataArray["lat"];
        $lng=$dataArray["lng"];
        $district=$dataArray["district"];
        $address=$dataArray["address"];
        $conNumber=$dataArray["conNumber"];
        $dateTime=$dataArray["dateTime"];
        $status="pending";
        
        
       
       $queryAdd="INSERT INTO camprequest (name,email, campDate,description, 
       attachment, lat,lng,district,address,conNumber,dateTime,status) VALUES 
       (:name,:email,:campDate,:description,:attachment,:lat,:lng,:district,:address,:conNumber,:dateTime,:status)";

       $arrayInject=[
        ":name"=>$name, ":email"=>$email, ":campDate"=>$campDate, ":attachment"=>$attachment, ":status"=>$status, 
        ":description"=>$description,":lat"=>$lat,":lng"=>$lng,":district"=>$district,":address"=>$address,
        ":conNumber"=>$conNumber,":dateTime"=>$dateTime];

        $results1= $this->db->runQuery($queryAdd,$arrayInject);
     
        return $results1;
    }

}