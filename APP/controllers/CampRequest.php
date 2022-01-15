<?php

class CampRequest extends Controller 
{
    private $campDateTime;
    private $longitude;
    private $lattidude;
    private $address;
    private  $city;

    function __construct()
    {
        parent::__construct();
    }

    public function getCampDateTime()
    {
        return $this->campDateTime;
    }


    public function setCampDateTime($campDateTime)
    {
        $this->campDateTime = $campDateTime;
    }

    public function getLongitude()
    {
        return $this->longitude;
    }

    public function setLongitude($longitude)
    {
        $this->longitude = $longitude;
    }

    public function getLattidude()
    {
        return $this->lattidude;
    }

    public function setLattidude($lattidude)
    {
        $this->lattidude = $lattidude;
    }

    public function getAddress()
    {
        return $this->address;
    }

    public function setAddress($address)
    {
        $this->address = $address;
    }

    public function getCity()
    {
        return $this->city;
    }

    public function setCity($city)
    {
        $this->city = $city;
    }
}

?>