<?php

class BloodRequest extends Request
{
    private $requestedBloodType;
    private $dueDateToRecieve;

    function __construct()
    {
        parent::__construct();
    }

    public function getRequestedBloodType()
    {
        return $this->requestedBloodType;
    }

    public function setRequestedBloodType($requestedBloodType)
    {
        $this->requestedBloodType = $requestedBloodType;
    }

    public function getDueDateToRecieve()
    {
        return $this->dueDateToRecieve;
    }


    public function setDueDateToRecieve($dueDateToRecieve)
    {
        $this->dueDateToRecieve = $dueDateToRecieve;
    }

}

?>