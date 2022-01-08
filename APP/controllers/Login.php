<?php
 ob_start();
 include_once('EmailClient.php');
class Login extends Controller
{

  
    function __construct()
    {
        parent:: __construct();
    }

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
                  case "superAdmin":
                    $this->view->render('super_index');
        }
   
      }
    }
  public function test()
  {
    $this->view->render("requestToResetPassword");
  }  

public function resetPassword()
{
  

  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST["sendEmail"])) {

      $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
      $userName = trim($_POST["username"]);
      $selector = bin2hex(random_bytes(8));
      $token = random_bytes(32);
      $url = "localhost/DonateToBlood/Login/resetPasswordmethod?selector=" . $selector . "&validator=" . bin2hex($token) . "&name=" . $userName;
      $expire = date("U") + 1800;
      $email = $this->model->resetPasswordStore($userName, $selector, $token, $url, $expire);
      if (!empty($email)) {

      
        $subject = "Reset Your Password for DonateToHeal";
        
        $message = "<p>We recieved a password reset request. The link to reset your password is here with. If you haven't requested please ignore this email</p>";
        $message .= "<p>Here is your password reset link: <br>";
        $message .= "<a href=\"" . $url . "\">" . $url . "</a></p>";
        $mail=new EmailClient($email,$subject,$message);
   
          header("Location:http://localhost/DonateToBlood/Login/test?msgsend=send");

        if ( $mail->sendMail()) {
         
          
        }
        
      } else {
      header("Location:http://localhost/DonateToBlood/Login/test?err='invalidNic'");
        // header("Location: ../Login/index?reset=emailError");
      }
    } else {
      header("Location:../Login/index");
    }
  } else {
    header("Location:../Login/index");
  }
}






public function resetPasswordmethod()
{
  $this->view->render("resetPassword");
  $selector = $_GET["selector"];
  $validator = $_GET["validator"];
  $userName = $_GET["name"];



  if (empty($selector) || empty($validator)) {
    header("Location:../Login/index?resetSuc=error");
  } else {
    if (ctype_xdigit($selector) !== false && ctype_xdigit($validator) !== false) {



      if ($_SERVER["REQUEST_METHOD"] == "POST") {
        
        if (isset($_POST["submit"])) {
          $pwd = $_POST["newPassword"];
          $conPwd = $_POST["confirmPassword"];
          if ($pwd === $conPwd) {
            $data=$this->model->resetPassword($userName, $pwd, $selector, $validator);
            if ($data) {
              $this->view->render("Login/index?resetSuc=success");
              // header("Location:http://localhost/DonateToBlood/Login/index?resetSuc=success");
             
            }else{
              // header("Location: index?resetSuc=fail");
            }
           
                
           } else {
            header("Location:../Login/resetPasswordmethod?selector=" . $selector . "&validator=" . $validator . "&resetSuc=conpwd");
          }
        }
      }
    } else {
      header("Location:http://localhost/DonateToBlood/Login/index?resetSuc=error");
    }
  }
}
    public function login()
    {

     
      if (!isset($_SESSION['nic'])) {
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
                session_start();
                $_SESSION["nic"] = $loginUser["nic"];
                $_SESSION["firstName"] = $loginUser["firstName"];
                $_SESSION["lastName"] = $loginUser["lastName"];
                $_SESSION["jobtype"] = $loginUser["jobtype"];
                $_SESSION["district"] = $loginUser["district"];
                $_SESSION['msg']="success";
                switch ($loginUser['jobtype']) {
                  case 'registeredUser':
                    $this->view->render('reg_user_index');
                    break;
                    case 'bloodBankCordinator':
                      $this->view->render('bbc_index');
                      break;
                    case 'superAdmin':
                        $this->view->render('super_index');
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
              $_SESSION['error']="Invalid Username or Password";
              $this->view->render('login');
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
ob_end_flush();

?>