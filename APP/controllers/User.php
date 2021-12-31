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
      session_start();
     session_regenerate_id(); 
      if(empty($_SESSION["nic"]))
      { 
        
       $this->view->render("login");
   
      }
   
      else
      {
        
        $jobType=$_SESSION["jobtype"];
        switch($jobType)
        {
                  
                  case "registeredUser":
                    $this->view->render('reg_user_index');
                    break;
                  case "admin":
                    $this->view->render('admin_page');
                    break;
                  case "bloodBankCordinator":
                    $this->view->render('bbc_index');
                    break;
                  case "":
                    $this->view->render('');
        }
   
      }
    }
    
public function submitFormLoad()
{$this->view->render('signUp');
}
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
        
         
           $dataArray=[
             "nic"=>$this->testInput($_POST["nic"]),
             "password"=>$this->testInput($_POST["password"]),
             "re-password"=>$this->testInput($_POST["re-password"]),
           ];
           
          
           
           if ( $dataArray["password"]===$dataArray["re-password"]) {
            $result = $this->model->checkNic($dataArray);
          
            if (empty($result)){
              session_start();
             $hashPassword = $_SESSION["password"] = password_hash( $dataArray["password"], PASSWORD_DEFAULT);

             $this->view->data = $dataArray["nic"];
             $_SESSION['error']="Fill this form to complete the registration";
            $this->view->render("user_reg",$this->view->data); 
            }else {
              $_SESSION['error']="The entered NIC is already registered";
              $this->view->render("signUp"); 
            }
              
           }
           else{
            $_SESSION['error']="Re-entered password is not matched";
            $this->view->render("signUp"); 
           }
      
    }
    }


    public function login()
    
    {
      session_start();
      if (!isset($_SESSION['nic'])) {
        # code...
     
      if ($_SERVER['REQUEST_METHOD']==="POST") {
        $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
     
          $dataLogin = [
            "username" => $this->testInput($_POST["username"]),
            "password" => $this->testInput($_POST["password"])
          ];
         
          if ((!empty($dataLogin['username'])) && !empty($dataLogin['password'])) {
            $loginUser = $this->model->login($dataLogin["username"], $dataLogin["password"]);
           
            if (empty($loginUser['error'])) {
              
              if (!empty($loginUser)) {
                
                $_SESSION["nic"] = $loginUser["nic"];
                $_SESSION["firstName"] = $loginUser["firstName"];
                $_SESSION["lastName"] = $loginUser["lastName"];
                $_SESSION["jobtype"] = $loginUser["jobtype"];
                $_SESSION['msg']="success";
                switch ($loginUser['jobtype']) {
                  case 'registeredUser':
                    $this->view->render('reg_user_index');
                    break;
                    case 'bloodBankCordinator':
                      $this->view->render('bbc_index');
                      break;
                  default:
                    # code...
                    break;
                }

              }else {
                $_SESSION['error']="Invalid Username or Password";
              $this->view->render('login');
             }
              
              
             

            
            }else {
              $this->view->render('login', $loginUser["Error"]);
            }
          }





        
      }
    }else {
        switch ($_SESSION['jobtype']) {
          case 'registeredUser':
            $this->view->render('reg_user_index');
            break;
            case 'bloodBankCordinator':
              $this->view->render('bbc_index');
              break;
          default:
            # code...
            break;
        }

      }
    }

    public function loadBRForm()
    {
      $this->view->render("blood_request");
    }
    public function addRequest()
    {
      if ($_SERVER["REQUEST_METHOD"]=="POST") {
        $_POST=filter_input_array(INPUT_POST,FILTER_SANITIZE_STRING);
        if (isset($_POST["sbmt_btn"])) {
           $dataArray=[
             "flname"=>$this->testInput($_POST["flname"]),
             
             "nic"=>$this->testInput($_POST["nic"]),
             "blood"=>$this->testInput($_POST["blood"]),
             "address"=>$this->testInput($_POST["address"]),
            
             
             "mobileNo"=>$this->testInput($_POST["num"]),
             "description"=>$this->testInput($_POST["description"]),
             "attachment"=>$this->testInput($_POST["att"]),
             "duedate"=>$this->testInput($_POST["duedate"]),

            
            
            
           ];
           
          
             $registerResult = $this->model->addbloodRequest($dataArray);
             if (empty($registerResult)) {
               $msg="Request sent Successfully!!";
               $this->view->render("blood_request",$msg);
             
           }else {
            $msg="Error occured, Try again!!";
            $this->view->render("blood_request",$msg);
           }
           
        }
    }
    }
    public function logout()
    {
      session_start();
    unset($_SESSION["nic"]);
    unset($_SESSION["firstName"]); 
    unset($_SESSION["lastName"]); 
    unset($_SESSION["jobtype"]); 
    unset($_SESSION["error"]); 
    session_destroy();
    $this->view->render('reg_user_index');
    }

}


?>