<?php
include_once('User_Model.php');
// include_once('BloodPost.php');
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


public function filterBloodPost()
{
   $post=new BloodPost();
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


    public function viewDonorHistory($nic){
        $query = "SELECT * FROM user WHERE jobType ='registeredUser' AND nic = :nic";
        $results2 = $this->db->runQuery($query,[":nic"=>$nic]);
        return $results2;
    }

    

    public function getProfileData($NIC){
        
        $query = "SELECT * FROM user WHERE nic=:nic";
        $userData = $this->db->runQuery($query,$NIC);
        return $userData;
    }

    public function editProfile($dataArray){
        $query = "UPDATE user SET firstName=:firstName, lastName=:lastName, email=:email,dob=:dob, address=:address, mobileNo=:mobileNo WHERE nic=:nic";
        $firstName=$dataArray["firstName"];
        $lasttName=$dataArray["lastName"];
        $email=$dataArray["email"];
        $dob=$dataArray["dob"];
        $address=$dataArray["address"];
        $mobileNo=$dataArray["mobileNo"];
        $nic =$dataArray["nic"];
        
        $arrayInject=[":firstName"=>$firstName, "lastName"=>$lasttName,"email"=>$email,"dob"=> $dob,
        "address"=>$address,"mobileNo"=>$mobileNo,"nic" =>$nic ];
        $results1= $this->db->runQuery($query,$arrayInject);
        return $results1;
    }
    

    }
    
?>