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

    public function resetPasswordStore($userName,$selector,$token,$url,$expire){
      
        $hashedToken=password_hash($token, PASSWORD_DEFAULT);
        $email=$this->db->runQuery("SELECT *FROM user WHERE nic=:nic",[":nic"=>$userName])[0];
       if(!empty($email)){
        $stmt1="DELETE FROM reset_password WHERE resetUserName=:username";
       $this->db->runQuery($stmt1,[':username'=>$userName]);

       $stmt2="INSERT INTO reset_password (resetEmail,resetUserName,resetSelector,resetToken,resetExpire) VALUES(:email,:username,:selector,:hashedtoken,:expire)";
        $this->db->runQuery($stmt2,[':email'=>$email['email'],':username'=>$userName,':selector'=>$selector,':hashedtoken'=>$token,':expire'=>$expire]);

        return $email['email'];
    }
    

    }

    public function resetPassword($nic,$password,$selector,$validator){
        $hashPassword=password_hash($password, PASSWORD_DEFAULT);

        $row=$this->db->runQuery("SELECT * FROM reset_password WHERE resetUserName=:nic",[":nic"=>$nic])[0];

        if(!empty($row)){
           
            $validatorBin=hex2bin($validator);
           
            if("password_verify( $validator,$validatorBin)"){
               
                $this->db->runQuery("UPDATE login SET password = :hashpasword WHERE nic = :nic",[":hashpasword"=>$hashPassword, ":nic"=>$nic]);
                return true;

            }
            else{
               
                return false;
            }

        }
        else{
            return false;
        }




    }


}


?>