<?php
class CampPost_model extends Model 
{
    function __construct()
    {
        parent:: __construct();
    }


public function getCampRequestDetails($district)
{
    if ($district=="all") {

        $query = 'SELECT * FROM camprequest';
        $res = $this->db->selectData($query);
        return $res;

        
    }
    else {
        
        $query = 'SELECT * FROM camprequest where  district= :district';
        $res = $this->db->runQuery($query, [":district" => $district]);
        return $res;
    }
    
}

public function filterCampPost($dataArr)
{
    if ($dataArr['bloodType']=="all" && $dataArr['district']=="all") {
     
        $res=$this->getCampRequestDetails('all');
        return $res;
       
    }elseif ($dataArr['bloodType']=="all") {
        $_SESSION['select']=$dataArr['district'];
     
        $res=$this->getCampRequestDetails($dataArr['district']);
        return $res;
    }elseif ($dataArr['district']=="all") {
        
        $_SESSION['selectb']=$dataArr['bloodType'];
        $query = 'SELECT * FROM camprequest where bloodType=:bloodType';
        $res = $this->db->runQuery($query, [ "bloodType"=>$dataArr['bloodType']]);
        return $res;
    }
    else{
        $_SESSION['select']=$dataArr['district'];
        $_SESSION['selectb']=$dataArr['bloodType'];
        $query = 'SELECT * FROM camprequest where  district= :district  AND bloodType=:bloodType';
        $res = $this->db->runQuery($query, [":district" => $dataArr['district'], "bloodType"=>$dataArr['bloodType']]);
        return $res;
    }
    
}

}


?>