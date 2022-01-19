<?php
require "./Includes/PHPMailer.php";
require "./Includes/SMTP.php";
require "./Includes/Exception.php";

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

class EmailClient
{
      private $addMail;
      private $recieverAddress;
      private $subject;
      private $messageBody;
      private static $mailClient;
      private function __construct()
      {

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
    public static function getInstance()
    {
        if (self::$mailClient == null) {
            self::$mailClient= new EmailClient();
        }
        return self::$mailClient;

    }



    public function getRecieverAddress()
    {
        return $this->recieverAddress;
    }


    public function setRecieverAddress($recieverAddress)
    {
        $this->recieverAddress = $recieverAddress;
    }


    public function getSubject()
    {
        return $this->subject;
    }


    public function setSubject($subject)
    {
        $this->subject = $subject;
    }

    public function getMessageBody()
    {
        return $this->messageBody;
    }


    public function setMessageBody($messageBody)
    {
        $this->messageBody = $messageBody;
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