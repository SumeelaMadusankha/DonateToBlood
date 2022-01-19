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

        $query = 'SELECT * FROM camprequest WHERE status= :status AND expired=:expired ORDER BY campDate ASC';
        $res = $this->db->runQuery($query,[':status'=>"accepted",":expired"=>"NO"]);
        return $res;

        
    }
    else {
        
        $query = 'SELECT * FROM camprequest where  district= :district AND status= :status AND expired=:expired ORDER BY campDate ASC';
        $res = $this->db->runQuery($query, [":district" => $district,":status"=>"accepted", ":expired"=>"NO"]);
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
       
    }
    
}
public function expieredCampPost($expire,$district)
{
    $query = "UPDATE camprequest SET expired=:expired WHERE Date(campDate)<:date AND district=:district";
    $res = $this->db->runQuery($query, [":expired" => "YES",":date"=>$expire,":district"=>$district]);
    return $query;
}

}


?>