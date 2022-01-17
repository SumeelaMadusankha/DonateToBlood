<?php 
class SuperAdmin_model extends Model{
    function __construct(){
        parent::__construct();
    }

    public function adminRegister($dataArray)
    {
       
        $firstname=$dataArray["firstname"];
        $lastname=$dataArray["lastname"];
        $nic=$dataArray["nic"];
        $district=$dataArray["district"];
        $city=$dataArray["city"];
        $address=$dataArray["address"];
        $email=$dataArray["email"];
        $phoneNo=$dataArray["phonenumber"];
        $password=$dataArray["password"];
        $gender=$dataArray["gender"];
       
       $quaryAddUser="INSERT INTO user (firstname,lastname,city, nic, district, address,
        email, mobileNo, gender, jobType) VALUES (:firstname,:lastname,:city,:nic, 
        :district,:address,:email, :mobileNo,:gender,:jobType)";
        $quaryAddAdmin="INSERT INTO bbcordinator(nic) VALUES (:nic)";
        $quaryAddLog="INSERT INTO login (nic,password) VALUES (:nic,:password)";

       $arrayInjectUser=[
           ':firstname'=>$firstname,
           ':lastname'=>$lastname,
            ':nic'=>$nic,
            ':district'=>$district, 
            ':city'=>$city, 
            ':address'=>$address,
            ':email'=>$email, 
            ':mobileNo'=>$phoneNo, 
            ':gender'=>$gender,
            ':jobType'=>'superAdmin'
       ];

       $arrayInjectAdmin=[
         ':nic'=>$nic
        ];

        $arrayInjectLog=[
             ':nic'=>$nic,
             ':password'=>$password, 
        ];



      

       $adminresults1= $this->db->runQuery($quaryAddUser,$arrayInjectUser);
       $adminresults2= $this->db->runQuery($quaryAddAdmin,$arrayInjectAdmin);
       $adminresults3= $this->db->runQuery($quaryAddLog,$arrayInjectLog);
       
       return $adminresults1&&$adminresults2&&$adminresults3;
    }

    public function get_AdminData()
    {
        $query2 = "select * from user WHERE jobType = :superAdmin ";
        $results2 = $this->db->runQuery($query2,[':superAdmin'=>'superAdmin']);
        return $results2;
    }

    public function remove_admin($id){
        $dataArray=[
            ':nic'=>$id,
        ];
        $sql1 = "DELETE FROM admin WHERE nic=:nic";
        $sql2 = "DELETE FROM user WHERE nic=:nic";
        $sql3 = "DELETE FROM login WHERE nic=:nic";
        $adminresults1= $this->db->runQuery($sql1,$dataArray);
        $adminresults2= $this->db->runQuery($sql2,$dataArray);
        $adminresults3= $this->db->runQuery($sql3,$dataArray);
        return $adminresults1&&$adminresults2&&$adminresults3;
    }

    public function get_Blooddetails($district){

        $query3 = "SELECT * FROM blooddetails WHERE Distric =:district ";
        $results3 = $this->db->runQuery($query3,[":district"=>$district]);
       
        return $results3;
    }

}
?>
