<?php
session_start();
class Request extends Controller 
{
    private $requestId;
    private $requestedId;
    private $description;
    private $attachment;
    private $contactPersonName;
    private $contactPersonMobileNo;
    private $acceptedNic;
    private $district;

    function __construct()
    {
        parent::__construct();
    }


    public function getRequestId()
    {
        return $this->requestId;
    }


    public function setRequestId($requestId)
    {
        $this->requestId = $requestId;
    }

    public function getRequestedId()
    {
        return $this->requestedId;
    }


    public function setRequestedId($requestedId)
    {
        $this->requestedId = $requestedId;
    }

    public function getDescription()
    {
        return $this->description;
    }


    public function setDescription($description)
    {
        $this->description = $description;
    }


    public function getAttachment()
    {
        return $this->attachment;
    }

    public function setAttachment($attachment)
    {
        $this->attachment = $attachment;
    }


    public function getContactPersonName()
    {
        return $this->contactPersonName;
    }


    public function setContactPersonName($contactPersonName)
    {
        $this->contactPersonName = $contactPersonName;
    }

    public function getDistrict()
    {
        return $this->district;
    }

    public function setDistrict($district)
    {
        $this->district = $district;
    }

    public function getContactPersonMobileNo()
    {
        return $this->contactPersonMobileNo;
    }

    public function setContactPersonMobileNo($contactPersonMobileNo)
    {
        $this->contactPersonMobileNo = $contactPersonMobileNo;
    }


    public function getAcceptedNic()
    {
        return $this->acceptedNic;
    }


    public function setAcceptedNic($acceptedNic)
    {
        $this->acceptedNic = $acceptedNic;
    }
}

?>