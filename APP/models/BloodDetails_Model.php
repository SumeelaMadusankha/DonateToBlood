<?php
class BloodDetails_Model extends Model{
    function __construct()
    {
        parent::__construct();
    }
    public function update_BloodDetails($blood_dataArray, $id)
    {
        $maximum_quantity = $blood_dataArray["maximum_quantity"];
        $available_quantity = $blood_dataArray["available_quantity"];
        // $quary4 = "UPDATE blooddetails( MaximumQuantity=':MaximumQuantity', AvailableQuantity=':AvailableQuantity') WHERE BloodGroupID=:id";
        $quary5 = "UPDATE blooddetails SET MaximumQuantity=:MaximumQuantity, AvailableQuantity=:AvailableQuantity WHERE BloodGroupID = :id";
        $array_Inject = [
            ':MaximumQuantity' => $maximum_quantity,
            ':AvailableQuantity' => $available_quantity,
            ':id' => $id
        ];
        $results4 = $this->db->runQuery($quary5, $array_Inject);
        return $results4;
    }
}