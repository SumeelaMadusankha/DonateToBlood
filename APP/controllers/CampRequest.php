<?php
include_once('Request.php');
class CampRequest extends Request 
{
    private $campDate;
    private $startinTime;
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
   public function  addRequest(){
    if ($_SERVER["REQUEST_METHOD"]=="POST") {
        $_POST=filter_input_array(INPUT_POST,FILTER_SANITIZE_STRING);
        if (isset($_POST["sbmt_btn"])) {
           $dataArray=[
             "name"=>$this->testInput($_POST["flname"]),
             
             "email"=>$_SESSION['email'],
             "campDate"=>$this->testInput($_POST["duedate"]),
             "description"=>$this->testInput($_POST["description"]),
             "attachment"=>"EN2022.pdf",
             "lat"=>$this->testInput($_POST["lat"]),
             "lng"=>$this->testInput($_POST["lng"]),
             "district"=>$this->testInput($_POST["district"]),
             "address"=>$this->testInput($_POST["address"]),
             "conNumber"=>$this->testInput($_POST["num"]),
             "date"=>$this->testInput($_POST["duedate"]),
             "time"=>$this->testInput($_POST['time']),
    
           ];
          
        
           $fileTempName=$_FILES["att"]["tmp_name"];
           $path="Files/".$dataArray['attachment'];
             $registerResult = $this->model->addCampRequest($dataArray);
             if (empty($registerResult)) {
             move_uploaded_file($fileTempName,$path);
               $_SESSION['msg']="success";
                header("Location: http://localhost/DonateToBlood/RegisteredUser/loadCampRequestForm");
           }else {
            
            $_SESSION['error']="failed";
           
            $this->view->render("campRequest");
           }
           
        }
    }
   }
}

?>