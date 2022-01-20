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