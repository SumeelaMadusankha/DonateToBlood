<?php 
class BB_Coordinater_Model extends Model{
    function __construct(){
        parent::__construct();
    }
    public function addBloodDetails($blood_dataArray){
        $blood_type=$blood_dataArray["blood_type"];
        $maximum_quantity=$blood_dataArray["maximum_quantity"];
        $available_quantity=$blood_dataArray["available_quantity"];
        $Distric=$blood_dataArray["Distric"];
        $quary4="INSERT INTO blooddetails (BloodGroup, Distric, MaximumQuantity, AvailableQuantity) VALUES (:BloodGroup,:Distric,:MaximumQuantity,:AvailableQuantity)";
        $array_Inject=[
            ':BloodGroup'=>$blood_type,
             ':Distric'=>$Distric,
             ':MaximumQuantity'=>$maximum_quantity, 
             ':AvailableQuantity'=> $available_quantity];
        $results4= $this->db->runQuery($quary4,$array_Inject);
        return $results4;
    }

    public function userRegister($dataArray)
    {
        $firstName=$dataArray["firstName"];
        $lastName=$dataArray["lastName"];
        $nic=$dataArray["nic"];
        $dob=$dataArray["dob"];
        $address=$dataArray["address"];
        $district=$dataArray["district"];
        $gender=$dataArray["gender"];
        $bloodGroup=$dataArray["bloodGroup"];
        $email=$dataArray["email"];
        $mobileNo=$dataArray["mobileNo"];
        $jobType=$dataArray["jobType"];
        $city=$dataArray["city"];
       
       $quary1="INSERT INTO user (nic, firstName, LastName, dob, address, district,gender,bloodGroup,email,mobileNo,jobType,city) VALUES (:nic,:firstName,:lastName,:dob,:address,:district,:gender,:bloodGroup, :email,:mobileNo,:jobType,:city)";
       $arrayInject=[
           ':nic'=>$nic,
            ':firstName'=>$firstName,
            ':lastName'=>$lastName, 
            ':dob'=>$dob, 
            ':address'=>$address, 
            ':district'=>$district, 
            ':gender'=>$gender, 
            ':bloodGroup'=>$bloodGroup, 
            ':email'=>$email, 
            ':mobileNo'=>$mobileNo, 
            ':jobType'=>$jobType, 
            ':city'=>$city];
       $results1= $this->db->runQuery($quary1,$arrayInject);
       return $results1;
    }
    public function getData(){
        $query2="select * from user";
        $results2= $this->db->selectData($query2);
        return $results2;

    }
    
    public function getR_Data(){
        $query3="select * from bloodrequest";
        $results3= $this->db->selectData($query3);
        return $results3;
    }
    public function getBloodData(){
        $query4="select * from blooddetails";
        $results4= $this->db->selectData($query4);
        return $results4;
    }

}
?>

