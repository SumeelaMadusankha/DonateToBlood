<?php
class Login_model extends Model 
{
    function __construct()
    {
        parent:: __construct();
    }


    public function login($username,$password)
    {
       
        $loginData=[

    		"firstName"=>"",
    		"lastName"=>"",
    		"nic"=>"",
    		"jobtype"=>"",
            "dob"=>"",
            "address"=>"",
            "district"=>"",
            "gender"=>"",
            "bloodGroup"=>"",
            "email"=>"",
            "mobileNo"=>"",
            "city"=>"",
    		"error"=>""


    	];
       $query= "SELECT * FROM login WHERE nic = ?";
       $res=$this->db->runQuery($query,[$username]);
      
       if (!empty($res)) {
           $rowRes= $res[0];
           
       }if (!empty($rowRes)) {
           $hashPassword=$rowRes['password'];
           if (password_verify($password,$hashPassword)) {
              
               $stmt="SELECT * FROM user WHERE nic = ?";
               $rowData=$this->db->runQuery($stmt,[$username])[0];
               if (!empty($rowData)) {
                $loginData["firstName"]=$rowData["firstName"];
                $loginData["lastName"]=$rowData["lastName"];
                $loginData["nic"]=$rowData["nic"];
                $loginData["jobtype"]=$rowData["jobType"];
                $loginData["dob"]=$rowData["dob"];
                $loginData["address"]=$rowData["address"];
                $loginData["district"]=$rowData["district"];
                $loginData["gender"]=$rowData["jobType"];
                $loginData["bloodGroup"]=$rowData["bloodGroup"];
                $loginData["email"]=$rowData["email"];
                $loginData["mobileNo"]=$rowData["mobileNo"];
                $loginData["city"]=$rowData["city"];
                


                return $loginData;
               }
           }else {
               $loginData["error"]="Wrong password!! Please try again..";
               
           }
       }else {
        $loginData["error"]="Wrong Username!! Please try again..";
       }
       return $loginData;
    }
}


?>