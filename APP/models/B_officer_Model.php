<?php
class B_officer_Model extends Model
{
    function __construct()
    {
        parent::__construct();
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
   
}
