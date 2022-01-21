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
public function getBloodReqest($district)
{
    $query2 = "select * from bloodrequest WHERE district=:district AND expired=:expired ORDER BY duedate ASC";
    $results2 = $this->db->runQuery($query2,[':district'=>$district,":expired"=>"NO"]);
    return $results2;

}
public function getCampReqest($district)
{
    $query2 = "select * from camprequest WHERE district=:district AND expired=:expired ORDER BY campDate ASC";
    $results2 = $this->db->runQuery($query2,[':district'=>$district,":expired"=>"NO"]);
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
    public function OfficerRegister($dataArray)
    {
        $firstName = $dataArray["firstName"];
        $lastName = $dataArray["lastName"];
        $nic = $dataArray["nic"];
        $password=$dataArray["password"];
        $dob = $dataArray["dob"];
        $address = $dataArray["address"];
        $district = $dataArray["district"];
        $gender = $dataArray["gender"];
        $email = $dataArray["email"];
        $mobileNo = $dataArray["mobileNo"];
        $jobType = $dataArray["jobType"];
        $city = $dataArray["city"];

        $quary11 = "INSERT INTO user (nic, firstName, LastName, dob, address, district,gender,email,mobileNo,jobType,city) VALUES (:nic,:firstName,:lastName,:dob,:address,:district,:gender,:email,:mobileNo,:jobType,:city)";
        $quary12="INSERT INTO bloodbankofficer (nic) VALUES (:nic)";
        $quary13 = "INSERT INTO login (nic, password) VALUES (:nic,:password)";

        $arrayInject = [
            ':nic' => $nic,
            ':firstName' => $firstName,
            ':lastName' => $lastName,
            ':dob' => $dob,
            ':address' => $address,
            ':district' => $district,
            ':gender' => $gender,
            ':email' => $email,
            ':mobileNo' => $mobileNo,
            ':jobType' => $jobType,
            ':city' => $city
        ];
        $arrayInject2=[':nic' => $nic,
            ':password' => $password];
           
        $results11 = $this->db->runQuery($quary11, $arrayInject);
        $resu = $this->db->runQuery($quary12, [":nic" => $nic]);
        $res=$this->db->runquery($quary13,$arrayInject2);
        return ($results11);
    }


    public function getData()
    {
        $query2 = "select * from user";
        $results2 = $this->db->selectData($query2);
        return $results2;
    }
    public function bbc_viewOfficer_Data($district){
        $query2 = "select * from user where jobType=:jobType AND district=:district";
        $res = $this->db->runQuery($query2, [":jobType" => 'BloodBankOfficer',":district"=>$district]);
        return $res;

    }

    public function getR_Data()
    {
        $query3 = "select * from bloodrequest WHERE expired=:expired ORDER BY duedate ASC";
        $results3 = $this->db->runquery($query3,[":expired"=>"NO"]);
        return $results3;
    }
    public function getBloodData($district)
    {
        $query4 = "select * from blooddetails WHERE Distric=:Distric";
        $results4 = $this->db->runquery($query4,[":Distric"=>$district]);
        return $results4;
    }
    public function getBoodId_type($id)
    {
        $query5 = 'SELECT * FROM blooddetails where  BloodGroupID= :id'  ;
        $res = $this->db->runQuery($query5, [":id" => $id]);
        return $res;
    }
    public function getUserName($id)
    {
        $query5 = 'SELECT * FROM user where  nic= :id';
        $res = $this->db->runQuery($query5, [":id" => $id]);
        return $res;
    }
    public function checkNICavailability($nic)
    {
        $query7 = 'SELECT * FROM user where nic=:nic';
        $reslt = $this->db->runQuery($query7, [":nic" => $nic]);
        if ($reslt) {
            return true;
        } else {
            return false;
        }
    }
    public function check_Officer_NICavailability($nic)
    {
        $query7 = 'SELECT * FROM user where nic=:nic';
        $reslt = $this->db->runQuery($query7, [":nic" => $nic]);
        if ($reslt) {
            return true;
        } else {
            return false;
        }
    }
    public function addDonatingRecord($dataArray, $nic)
    {
        $date = $dataArray["donate_date"];
        $centre = $dataArray["donate_centre"];
        $quary9 = "INSERT INTO bloodrecord(nic,date,venue) VALUES (:nic,:date,:venue)";
        $arrayRecord = [
            ':nic' => $nic,
            ':date' => $date,
            ':venue' => $centre,
        ];

        $results9 = $this->db->runQuery($quary9, $arrayRecord);
        return $results9;
    }
    public function getStaticticalbloodprogress(){
        $query10 = "select * from blooddetails";
        $results2 = $this->db->selectData($query10);
        return $results2;
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
   
        $query = "UPDATE bloodrequest SET status = :status, acceptednic = :nic WHERE requestId = :id";
        $res = $this->db->runQuery($query, [":id" => $id,":status" =>"accepted",":nic"=>$_SESSION['nic']]);
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
       
        $query = "UPDATE camprequest SET status = :status, acceptednic = :nic  WHERE requestId = :id";
        $res = $this->db->runQuery($query, [":id" => $id,":status" =>"accepted",":nic"=>$_SESSION['nic']]);
        return $res;
    }
    public function Officer_Profile_Data($nic){
        $query7 = 'SELECT * FROM user where nic=:nic';
        $reslt = $this->db->runQuery($query7, [":nic" => $nic]);
        return $reslt;
    }
    
public function getUsers($district)
{
    $query = 'SELECT * FROM user where  district= :district AND jobType=:jobtype';
    $res = $this->db->runQuery($query, [":district" => $district,":jobtype"=>"registeredUser"]);
    return $res;
}

public function getcampDetails($id)
{
    $query = 'SELECT * FROM camprequest where  requestId= :id';
    $res = $this->db->runQuery($query, [":id" => $id]);
    return $res;
}

public function getBBLoggedData($nic){
    $query2 = 'select * from user where nic=:nic';
    $results2 = $this->db->runQuery($query2,[":nic" => $nic]);
    return $results2;
}
}
