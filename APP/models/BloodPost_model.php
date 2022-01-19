<?php
class BloodPost_model extends Model 
{
    function __construct()
    {
        parent:: __construct();
    }


public function getBloodRequestDetails($district)
{
    if ($district=="all") {

        $query = 'SELECT * FROM bloodrequest WHERE status= :status AND expired=:expired ORDER BY duedate ASC';
        $res = $this->db->runQuery($query,[":status"=> "accepted",":expired"=>"NO"]);
        return $res;

        
    }
    else {
        
        $query = 'SELECT * FROM bloodrequest where  district= :district AND status= :status AND expired=:expired ORDER BY duedate ASC';
        $res = $this->db->runQuery($query, [":district" => $district,":status"=>"accepted",":expired"=>"NO"]);
        return $res;
    }
    
}

public function filterBloodPost($dataArr)
{
    if ($dataArr['bloodType']=="all" && $dataArr['district']=="all") {
     
        $res=$this->getBloodRequestDetails('all');
        return $res;
       
    }elseif ($dataArr['bloodType']=="all") {
        $_SESSION['select']=$dataArr['district'];
     
        $res=$this->getBloodRequestDetails($dataArr['district']);
        return $res;
    }elseif ($dataArr['district']=="all") {
        
        $_SESSION['selectb']=$dataArr['bloodType'];
        $query = 'SELECT * FROM bloodrequest where bloodType=:bloodType AND status= :status AND expired=:expired ORDER BY duedate ASC' ;
        $res = $this->db->runQuery($query, [ "bloodType"=>$dataArr['bloodType'],":status"=>"accepted",":expired"=>"NO"]);
        return $res;
    }
    else{
        $_SESSION['select']=$dataArr['district'];
        $_SESSION['selectb']=$dataArr['bloodType'];
        $query = 'SELECT * FROM bloodrequest where  district= :district  AND bloodType=:bloodType AND status= :status AND expired=:expired ORDER BY duedate ASC';
        $res = $this->db->runQuery($query, [":district" => $dataArr['district'], "bloodType"=>$dataArr['bloodType'],":status"=>"accepted",":expired"=>"NO"]);
        return $res;
    }
    
}
public function expieredBloodPost($expire,$district)
{
    $query = "UPDATE bloodrequest SET expired=:expired WHERE Date(duedate)<:date AND district=:district";
    $res = $this->db->runQuery($query, [":expired" => "YES",":date"=>$expire,":district"=>$district]);
    return $query;
}
}


?>