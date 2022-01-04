<?php 
class SuperAdmin_model extends Model{
    function __construct(){
        parent::__construct();
    }

    public function adminRegister($dataArray)
    {
       
        $fullname=$dataArray["fullname"];
        $nic=$dataArray["nic"];
        $district=$dataArray["district"];
        $username=$dataArray["username"];
        $email=$dataArray["email"];
        $phoneNo=$dataArray["phoneNo"];
        $password=$dataArray["password"];
        $gender=$dataArray["gender"];
       
       $quaryAdd="INSERT INTO admin (name, nic, district, username,
        email, phonenumber, password, gender) VALUES (:name,:nic, 
        :district,:username,:email, :phonenumber,:password,:gender)";
       $arrayInject=[
           ':name'=>$fullname,
            ':nic'=>$nic,
            ':district'=>$district, 
            ':username'=>$username, 
            ':email'=>$email, 
            ':phonenumber'=>$phoneNo, 
            ':password'=>$password, 
            ':gender'=>$gender,
       ];
      

       $adminresults1= $this->db->runQuery($quaryAdd,$arrayInject);
       
       return $adminresults1;
    }
   
    
    
}
?>
