<?php

class Route{

	private $_routes=null;  //associative array
	private $_params=null;
    private static $rout;
    function __construct()
	{
		
	}

    public static function getInstance()
    {
		
    
        if (self::$rout == null) {
		
            self::$rout = new Route();
        }

        self::$rout->_getURL();
		
        if (file_exists(self::$rout->_routes[0])) {
            self::$rout->_loadDefaultController();
            return false;
        }
        if (self::$rout->_loadController()) {
            self::$rout->_loadcontrollermethod();
        }
		
        return self::$rout;
    }

    protected function _getURL(){
		
		//get url path and assign into $url
		$url  = isset($_GET['url'])? $_GET['url']: null;
		//remove '/' in last url path if it is have
		$url  = rtrim($url,'/');
		//sanitize the url  
		$url  = filter_var($url,FILTER_SANITIZE_URL);
		//assign into $_routes associative
		$this->_routes = explode('/',$url);//user/register= [0]=>user,[1]=>register
	}
	private function _loadController(){
		//get the require path file into file variable
		$file = 'APP/controllers/'.$this->_routes[0].'.php';
		
		//if already have
		if(file_exists($file)){
			//require the file
			require $file;
			//assign into  
			
			$this->_params = new $this->_routes[0];
			//load the model in each controller
			$this->_params->loadModel($this->_routes[0]);
			
			return true;
		}
		else{
		
			
			return false;
		}
      
	}
    //Create the loadDefaultController() function for load default page(home page)
    private function _loadDefaultController(){
		//require the file 
		require 'APP/controllers/Index.php';
		// Create the object
		$this->_params = new Index();
		// Call thw function
		if (!isset($_SESSION['nic'])) {
			// unset($_SESSION);
			$this->_params->index();
		}else {
			header("Location:../../DonateToBlood/Login/mustLogout");
			
		}
        
	}
    //Create the loadcontrllermethod function loading method one by one 
	private function _loadcontrollermethod(){
		//get the lenght in associative array 
		$urllenght = count($this->_routes); 
		//check length greater than one   
		if($urllenght>1){
			//if method not exist then get the error page 
			if(!method_exists($this->_params, $this->_routes[1])){
				// header("Location: ../user/error");
				// exit;
			}
		   
		}
		// switch   $urllength and pass methods each controller page  
		switch($urllenght){
		   
		   case 4:
			   //pass methods
			   $this->_params->{$this->_routes[1]}($this->_routes[2],$this->_routes[3]);
			   break;
			  case 3:
				//pass methods
			   $this->_params->{$this->_routes[1]}($this->_routes[2]);
			   break;
			  case 2:
				//pass methods
			   $this->_params->{$this->_routes[1]}();
			   break;
			  default:
			   //call index function in controller
			   if (isset($_SESSION['nic'])) {
				header("Location:../../DonateToBlood/Login/mustLogout");
				
			}else {
				$this->_params->index();
				
			}
			   break;
		}
	 }
   
}