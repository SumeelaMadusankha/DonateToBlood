<?php
abstract class  Person extends Controller
{
    private $nic;
    private $password;
    private $firstName;
    private $lastName;
    private $MobileNo;
    private $email;
    private $district;
    private $address;
    private $gender;
    private $jobType;


    function __construct()
    {
        parent:: __construct();
    }
    public function getPassword()
    {
        return $this->password;
    }


    public function setPassword($password)
    {
        $this->password = $password;
    }
    public function getJobType()
    {
        return $this->jobType;
    }


    public function setJobType($jobType)
    {
        $this->jobType = $jobType;
    }
    public function setNic($nic)
    {
        $this->nic = $nic;
    }


    public function setFirstName($firstName)
    {
        $this->firstName = $firstName;
    }

    public function setLastName($lastName)
    {
        $this->lastName = $lastName;
    }


    public function setMobileNo($MobileNo)
    {
        $this->MobileNo = $MobileNo;
    }


    public function setEmail($email)
    {
        $this->email = $email;
    }


    public function setDistrict($district)
    {
        $this->district = $district;
    }


    public function setAddress($address)
    {
        $this->address = $address;
    }

    public function setGender($gender)
    {
        $this->gender = $gender;
    }
    public function getNic()
    {
        return $this->nic;
    }


    public function getFirstName()
    {
        return $this->firstName;
    }


    public function getLastName()
    {
        return $this->lastName;
    }

    public function getMobileNo()
    {
        return $this->MobileNo;
    }


    public function getEmail()
    {
        return $this->email;
    }


    public function getDistrict()
    {
        return $this->district;
    }

    public function getAddress()
    {
        return $this->address;
    }


    public function getGender()
    {
        return $this->gender;
    }


}


?>