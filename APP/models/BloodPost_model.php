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

        $query = 'SELECT * FROM bloodrequest WHERE status= :status';
        $res = $this->db->runQuery($query,[":status"=> "accepted"]);
        return $res;

        
    }
    else {
        
        $query = 'SELECT * FROM bloodrequest where  district= :district AND status= :status';
        $res = $this->db->runQuery($query, [":district" => $district,":status"=>"accepted"]);
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
        $query = 'SELECT * FROM bloodrequest where bloodType=:bloodType AND status= :status' ;
        $res = $this->db->runQuery($query, [ "bloodType"=>$dataArr['bloodType'],":status"=>"accepted"]);
        return $res;
    }
    else{
        $_SESSION['select']=$dataArr['district'];
        $_SESSION['selectb']=$dataArr['bloodType'];
        $query = 'SELECT * FROM bloodrequest where  district= :district  AND bloodType=:bloodType AND status= :status';
        $res = $this->db->runQuery($query, [":district" => $dataArr['district'], "bloodType"=>$dataArr['bloodType'],":status"=>"accepted"]);
        return $res;
    }
    
}

}


?>