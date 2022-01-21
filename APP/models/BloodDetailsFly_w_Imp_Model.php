<?php
class  BloodDetailsFly_w_Imp_Model extends Model{
    function __construct()
    {
        parent::__construct();
    }
    public function getBoodId_type($id)
    {
        $query5 = 'SELECT * FROM blooddetails where  BloodGroupID= :id';
        $res = $this->db->runQuery($query5, [":id" => $id]);
        return $res;
    }
    public function getBloodData($district)
    {
        $query4 = "select * from blooddetails where Distric=:district";

        $results4 = $this->db->runQuery($query4,[':district'=>$district]);
        return $results4;
    }
}