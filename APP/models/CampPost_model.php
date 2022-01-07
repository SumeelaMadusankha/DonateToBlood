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
    if ($dataArr['district']=="all") {
     
        $res=$this->getCampRequestDetails('all');
        return $res;
       
   
    }else{
        $res=$this->getCampRequestDetails($dataArr['district']);
        return $res;
        return $res;
    }
    
}

}


?>