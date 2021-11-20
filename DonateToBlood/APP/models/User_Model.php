<?php 
class User_Model extends Model{
    function __construct(){
        parent::__construct();
    }

    public function userRegister($dataArray)
    {
       $quary1= "INSERT INTO user (firstName, lastName,nic,dob,address,district,gender,bloodGroup,email,mobileName,jobType,city) VALUES (?, ?,?,?,?,?,?,?,?,?,?,?)"
       query2= "INSERT INTO login (nic,password) VALUES (?, ?,?,?,?,?,?,?,?,?,?,?)"
       $this->db->runQuery($query1,$dataArray); 
    }
}
?>
