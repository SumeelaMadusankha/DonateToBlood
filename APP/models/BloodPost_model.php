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

        $query = 'SELECT * FROM bloodrequest';
        $res = $this->db->selectData($query);
        return $res;

        
    }
    else {
        
        $query = 'SELECT * FROM bloodrequest where  district= :district';
        $res = $this->db->runQuery($query, [":district" => $district]);
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
        $query = 'SELECT * FROM bloodrequest where bloodType=:bloodType';
        $res = $this->db->runQuery($query, [ "bloodType"=>$dataArr['bloodType']]);
        return $res;
    }
    else{
        $_SESSION['select']=$dataArr['district'];
        $_SESSION['selectb']=$dataArr['bloodType'];
        $query = 'SELECT * FROM bloodrequest where  district= :district  AND bloodType=:bloodType';
        $res = $this->db->runQuery($query, [":district" => $dataArr['district'], "bloodType"=>$dataArr['bloodType']]);
        return $res;
    }
    
}

}


?>