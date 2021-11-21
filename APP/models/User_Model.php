<?php 
class User_Model extends Model{
    function __construct(){
        parent::__construct();
    }

    public function userRegister($dataArray)
    {
<<<<<<< HEAD
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
       
       $quary1="INSERT INTO user (nic, firstName, LastName, dob, address, district,gender,bloodGroup,email,mobileNo,jobType,city) VALUES ('$nic','$firstName',$lastName','$dob','$address','$district',$gender,'$bloodGroup',' $email','$mobileNo','$jobType','$city')";
       $results= $this->db->runQuery($quary1);
       return $results;
=======
       $quary1= "INSERT INTO user (firstName, lastName,nic,dob,address,district,gender,bloodGroup,email,mobileName,jobType,city) VALUES (?, ?,?,?,?,?,?,?,?,?,?,?)"
       $query2= "INSERT INTO login (nic,password) VALUES (?, ?,?,?,?,?,?,?,?,?,?,?)"
       $this->db->runQuery($query1,$dataArray); 
>>>>>>> 6be5d81bec4ba66ba8ebf96f26a5427aa5b73a3e
    }
}
?>
