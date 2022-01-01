<?php
include_once('User_Model.php');
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
    }
    
?>