<?php 
class User_Model extends Model{
    function __construct(){
        parent::__construct();
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
       $quary2="INSERT INTO login (nic,password) VALUES (:nic,:password)";
       
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
            session_start();
       $results1= $this->db->runQuery($quary1,$arrayInject);
       $results2 =$this->db->runQuery($quary2,[':nic'=> $nic, ':password'=> $_SESSION['password']]);
       

       return $results1;
    }
    public function login($username,$password)
    {
        $loginData=[

    		"Fname"=>"",
    		"Lname"=>"",
    		"NIC"=>"",
    		"jobtype"=>"",
    		"Error"=>""


    	];
       $query= "SELECT * FROM login WHERE id <= ?";
       $res=$this->db->runQuery($query,[$username]);
       if (!empty($res)) {
           $rowRes= $res[0];
       }if (!empty($rowRes)) {
           $hashPassword=$rowRes['password'];
           if (password_verify($password,$hashPassword)) {
               # code...
           }
       }
    }
    public function requestBlood($dataArray)
    {

        $nic=$dataArray["nic"];
        $bloodType=$dataArray["bloodType"];
        $description=$dataArray["descript"];
        $attachment=$dataArray["attach"];
        $status=$dataArray["status"];
        $fullName=$dataArray["fullName"];
        $mobNum=$dataArray["contactNo"];
        $dueDate=$dataArray["dueDate"];
        $address=$dataArray["address"];

        $quary1="INSERT INTO bloodrequest (nic, bloodType, description, attachment, requestedTime, status, fullName, mobNum, dueDate, address) VALUES (:nic,:bloodType,:descript,:attach,:status,:fullName,:contactNo,:dueDate,:address)";
        
        $dataArray1=[
            ':nic'=>$nic,
            ':bloodType'=>$bloodType,
            ':descript'=>$description, 
            ':attach'=>$attachment, 
            ':status'=>$status, 
            ':fullName'=>$fullName, 
            ':contactNo'=>$mobNum, 
            ':dueDate'=>$dueDate, 
            ':address'=>$address, 
        ];
        $results3= $this->db->runQuery($quary1,$dataArray1);
        return $results3;
    }
}
?>

