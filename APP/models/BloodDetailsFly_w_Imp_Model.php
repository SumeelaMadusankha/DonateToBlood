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
}