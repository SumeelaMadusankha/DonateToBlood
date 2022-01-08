<?php
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
    



    public function login()
    {

      session_start();
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
              
                $_SESSION["nic"] = $loginUser["nic"];
                $_SESSION["firstName"] = $loginUser["firstName"];
                $_SESSION["lastName"] = $loginUser["lastName"];
                $_SESSION["jobtype"] = $loginUser["jobtype"];
                $_SESSION["email"] = $loginUser["email"];
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
    $this->view->render('login');
    }
}


?>