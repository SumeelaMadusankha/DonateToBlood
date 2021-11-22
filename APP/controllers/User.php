<?php
class User extends Controller{
    private $firstName;
    private $lastName;
    private $bloodGroup;
    private $District;
    private $MobileNo;
    private $email;
    private $nic;
    private $address;
    private $dateOfBirth;
    private $gender;
    
    public function index()
    {
      $this->view->render('signUp');
    }
<<<<<<< HEAD

    public function request()
    {
      $this->view->render('blood_request');
    }
=======
    public function loginFormLoad()
{
    session_start();
    session_regenerate_id(); 
   if(!empty($_SESSION["NIC"]))
   {  $jobType=$_SESSION["jobtype"];
     switch($jobType)
     {
               
               case "registeredUser":
                 $this->view->render('index');
                 break;
               case "admin":
                 $this->view->render('admin_page');
                 break;
               case "":
                 $this->view->render('');
                 break;
               case "":
                 $this->view->render('');
     }

   }

   else
   {
     $this->view->render("login");

   }
}


>>>>>>> 6c4ecd7be960dd087946085908c3fd1db1ef56a7
     public function register()
    {
       if ($_SERVER["REQUEST_METHOD"]=="POST") {
           $_POST=filter_input_array(INPUT_POST,FILTER_SANITIZE_STRING);
           if (isset($_POST["register_btn"])) {
              $dataArray=[
                "firstName"=>$this->testInput($_POST["fname"]),
                "lastName"=>$this->testInput($_POST["lname"]),
                "nic"=>$this->testInput($_POST["nic"]),
                "dob"=>$this->testInput($_POST["bday"]),
                "address"=>$this->testInput($_POST["address"]),
                "district"=>$this->testInput($_POST["districts"]),
                "gender"=>$this->testInput($_POST["gender"]),
                "bloodGroup"=>$this->testInput($_POST["blood"]),
                "email"=>$this->testInput($_POST["email"]),
                "mobileNo"=>$this->testInput($_POST["mobnum"]),
                "jobType"=>$this->testInput("registeredUser"),
                "city"=>$this->testInput($_POST["city"]),
               
               
               
              ];
              
              if ((strlen($dataArray["nic"])==10  || strlen($dataArray["nic"])==12) && (filter_var($dataArray["email"],FILTER_VALIDATE_EMAIL))) {
                $registerResult = $this->model->userRegister($dataArray);
                if (empty($registerResult)) {
                  $this->view->render("login");
                }
              }
              
           }
       }
    }


    public function signUp()
    {
    
   
      if ($_SERVER["REQUEST_METHOD"] === "POST") {
        
        $_POST=filter_input_array(INPUT_POST,FILTER_SANITIZE_STRING);
        if (isset($_POST["submit"])) {
         
           $dataArray=[
             "nic"=>$this->testInput($_POST["nic"]),
             "password"=>$this->testInput($_POST["password"]),
             "re-password"=>$this->testInput($_POST["re-password"]),
           ];
           
           
           
           if ( $dataArray["password"]===$dataArray["re-password"]) {
             session_start();
             $hashPassword = 
             $_SESSION["password"] = password_hash( $dataArray["password"], PASSWORD_DEFAULT);;
             $this->view->data = $dataArray["nic"];
             
            $this->view->render("user_reg",$this->view->data);  
           }
           else{
             print_r("testing one");
           }
           
        }
    }
    }
    public function login()
    {
      if ($_SERVER['REQUEST_METHOD']==="POST") {
        $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
        if (isset($_POST["login"])) {
          $dataLogin = [
            "username" => $this->testInput($_POST["username"]),
            "password" => $this->testInput($_POST["password"])
          ];
         
          if ((!empty($dataLogin['username'])) && !empty($dataLogin['password'])) {
            $loginUser = $this->model->login($dataLogin["username"], $dataLogin["password"]);
           
            if (empty($loginUser['error'])) {
              session_start();
              $_SESSION["nic"] = $loginUser["nic"];
              $_SESSION["firstName"] = $loginUser["firstName"];
              $_SESSION["lastName"] = $loginUser["lastName"];
              $_SESSION["jobtype"] = $loginUser["jobtype"];
             

            switch ($loginUser['jobtype']) {
              case 'registeredUser':
                $this->view->render('userViewProfile',$loginUser);
                break;
                case 'bloodBankCordinator':
                  $this->view->render('bbc_index');
                  break;
              default:
                # code...
                break;
            }
            }else {
              $this->view->render('login', $loginUser["Error"]);
            }
          }





        }
      }
    }



    public function addRequest()
    {
       if ($_SERVER["REQUEST_METHOD"]=="POST") {
           $_POST=filter_input_array(INPUT_POST,FILTER_SANITIZE_STRING);
           if (isset($_POST["sbmt_btn"])) {
              $request_Array=[

                "nic"=>$this->testInput($_POST["nic"]),
                "fullName"=>$this->testInput($_POST["flname"]),
                "bloodType"=>$this->testInput($_POST["blood"]),
                "address"=>$this->testInput($_POST["address"]),
                "contactNo"=>$this->testInput($_POST["num"]),
                "descript"=>$this->testInput($_POST["description"]),
                "attach"=>$this->testInput($_POST["att"]),
                "dueDate"=>$this->testInput($_POST["duedate"]),
                "status"=>$this->testInput("pending")
               
              ];
              $bloodRequest = $this->model->requestBlood($request_Array);
              print_r($bloodRequest);
              if(empty($bloodRequest)){
                $this->view->data="Data successfully added";
                $this->view->render('blood_request',$this->view->data);
              }
              else{
                $this->view->data="Invalid Data";
                $this->view->render('blood_request',$this->view->data);
              }
              
           }
       }
    }

}
?>