<?php
include_once('User_model.php');
class UnregisteredUser_Model extends User_Model 
{
    function __construct()
    {
        parent::__construct();
    }


    public function userRegister($dataArray)
    {
        $firstName=$dataArray["firstName"];
        $lastName=$dataArray["lastName"];
        $nic=$dataArray["nic"];
        $dob=$dataArray["dob"];
        $address=$dataArray["address"];
        $district=$dataArray["district"];
        $gender=$dataArray["gender"];
        $bloodGroup=$dataArray["bloodGroup"];
        $email=$dataArray["email"];
        $mobileNo=$dataArray["mobileNo"];
        $jobType=$dataArray["jobType"];
        $city=$dataArray["city"];
       
       
       $quary1="INSERT INTO user (nic, firstName, LastName, dob, address, district,gender,bloodGroup,email,mobileNo,jobType,city) VALUES (:nic,:firstName,:lastName,:dob,:address,:district,:gender,:bloodGroup, :email,:mobileNo,:jobType,:city)";
       $quary2="INSERT INTO login (nic,password) VALUES (:nic,:password)";
       $arrayInject=[
           ':nic'=>$nic,
            ':firstName'=>$firstName,
            ':lastName'=>$lastName, 
            ':dob'=>$dob, 
            ':address'=>$address, 
            ':district'=>$district, 
            ':gender'=>$gender, 
            ':bloodGroup'=>$bloodGroup, 
            ':email'=>$email, 
            ':mobileNo'=>$mobileNo, 
            ':jobType'=>$jobType, 
            ':city'=>$city];
           
       $results1= $this->db->runQuery($quary1,$arrayInject);
       $results2 =$this->db->runQuery($quary2,[':nic'=> $nic, ':password'=> $_SESSION['password']]);
       return $results1;
    }
    public function checkNic($dataArray)
    {
        $query = 'SELECT * FROM user where nic = :nic';
        $res= $this->db->runQuery($query,[":nic"=>$dataArray['nic']]);
        return $res;
    }

    
    }




?>