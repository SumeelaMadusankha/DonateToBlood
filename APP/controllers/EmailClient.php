<?php
require "./Includes/PHPMailer.php";
require "./Includes/SMTP.php";
require "./Includes/Exception.php";

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

class EmailClient extends Controller 
{

      private $addMail;
      private $recieverAddress;
      private $subject;
      private $messageBody;
      
      function __construct($recieverAddress,$subject,$messageBody)
      {
          parent:: __construct();
          $this->recieverAddress=$recieverAddress;
          $this->subject=$subject;
          $this->messageBody=$messageBody;
          
          $this->addMail= new PHPMailer(true);
          $this->addMail->SMTPOptions = array(
            'ssl' => array(
            'verify_peer' => false,
            'verify_peer_name' => false,
            'allow_self_signed' => true
            )
            );
            $this->addMail->isSMTP();
            $this->addMail->isHTML(true);
            $this->addMail->Host = "smtp.gmail.com";
            $this->addMail->SMTPAuth = "true";
            $this->addMail->SMTPSecure = "tls";
            $this->addMail->Port = "25";
            $this->addMail->Username = "donatetoheal19@gmail.com";
            $this->addMail->Password = "@Donate123";
            $this->addMail->setFrom("donatetoheal19@gmail.com");
            
         
            

      }

      public function sendMail()
      {
            $this->addMail->addAddress($this->recieverAddress);
            $this->addMail->Subject=$this->subject;
            $this->addMail->Body = $this->messageBody;
            if ($this->addMail->Send()) {
                  
            }else {
                   echo "Failed";
            }
      }
  
}




    	    
                  
                 
                
                
                 
                
                 
                
                
           

         
         
         
  

?>