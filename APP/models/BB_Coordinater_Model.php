<?php
class BB_Coordinater_Model extends Model
{
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
public function getBloodReqest()
{
    $query2 = "select * from bloodrequest";
    $results2 = $this->db->selectData($query2);
    return $results2;

}
public function getCampReqest()
{
    $query2 = "select * from camprequest";
    $results2 = $this->db->selectData($query2);
    return $results2;

}
    public function userRegister($dataArray)
    {
        $firstName = $dataArray["firstName"];
        $lastName = $dataArray["lastName"];
        $nic = $dataArray["nic"];
        $dob = $dataArray["dob"];
        $address = $dataArray["address"];
        $district = $dataArray["district"];
        $gender = $dataArray["gender"];
        $bloodGroup = $dataArray["bloodGroup"];
        $email = $dataArray["email"];
        $mobileNo = $dataArray["mobileNo"];
        $jobType = $dataArray["jobType"];
        $city = $dataArray["city"];

        $quary1 = "INSERT INTO user (nic, firstName, LastName, dob, address, district,gender,bloodGroup,email,mobileNo,jobType,city) VALUES (:nic,:firstName,:lastName,:dob,:address,:district,:gender,:bloodGroup, :email,:mobileNo,:jobType,:city)";
        $arrayInject = [
            ':nic' => $nic,
            ':firstName' => $firstName,
            ':lastName' => $lastName,
            ':dob' => $dob,
            ':address' => $address,
            ':district' => $district,
            ':gender' => $gender,
            ':bloodGroup' => $bloodGroup,
            ':email' => $email,
            ':mobileNo' => $mobileNo,
            ':jobType' => $jobType,
            ':city' => $city
        ];
        $results1 = $this->db->runQuery($quary1, $arrayInject);
        return $results1;
    }
    public function getData()
    {
        $query2 = "select * from user";
        $results2 = $this->db->selectData($query2);
        return $results2;
    }

    public function getR_Data()
    {
        $query3 = "select * from bloodrequest";
        $results3 = $this->db->selectData($query3);
        return $results3;
    }
    public function getBloodData()
    {
        $query4 = "select * from blooddetails";
        $results4 = $this->db->selectData($query4);
        return $results4;
    }
    public function getBoodId_type($id)
    {
        $query5 = 'SELECT * FROM blooddetails where  BloodGroupID= :id';
        $res = $this->db->runQuery($query5, [":id" => $id]);
        return $res;
    }
    public function cancelBloodRequestModel($id)
    {
        $query = "UPDATE bloodrequest SET status = :status,acceptednic= :nic WHERE requestId = :id";
        $res = $this->db->runQuery($query, [":id" => $id,":status" => "pending",":nic" => '']);
        return $res;
    }
    public function declienBloodRequestModel($id)
    {
        $query = "DELETE FROM bloodrequest    WHERE requestId = :id";
        $res = $this->db->runQuery($query, [":id" => $id]);
        return $res;
    }
    public function acceptBloodRequestModel($id)
    {
        $dt = new DateTime();
        session_start();
        $query = "UPDATE bloodrequest SET status = :status, acceptednic = :nic,acceptedtime = :time  WHERE requestId = :id";
        $res = $this->db->runQuery($query, [":id" => $id,":status" =>"accepted",":nic"=>$_SESSION['nic'],":time"=>$dt->getTimestamp()]);
        return $res;
    }
    

    public function cancelCampRequestModel($id)
    {
        $query = "UPDATE camprequest SET status = :status , acceptednic= :nic WHERE requestId = :id";
        $res = $this->db->runQuery($query, [":id" => $id,":status" => "pending",":nic" => '']);
        return $res;
    }
    public function declienCampRequestModel($id)
    {
        $query = "DELETE FROM camprequest    WHERE requestId = :id";
        $res = $this->db->runQuery($query, [":id" => $id]);
        return $res;
    }
    public function acceptCampRequestModel($id)
    
    {
        $dt = new DateTime();
        session_start();
        $query = "UPDATE camprequest SET status = :status, acceptednic = :nic,acceptedtime = :time  WHERE requestId = :id";
        $res = $this->db->runQuery($query, [":id" => $id,":status" =>"accepted",":nic"=>$_SESSION['nic'],":time"=>$dt->getTimestamp()]);
        return $res;
    }
    


}
