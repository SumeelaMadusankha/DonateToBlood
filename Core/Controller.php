<?php
class Controller{
	protected $view;
	function __construct(){
		$this->view= new view();
	}
	//Create the loadModel function for load the model  
	public function loadModel($modelName){
	     //assign the file 
		$path = 'APP/models/'.$modelName.'_model.php';
        //check already have in this file
		if(file_exists($path)){
			//load file
			require $path;
			$className = $modelName.'_model';
			//Ceate the object
			$this->model = new $className();         
		 }

	}  

	public function testInput($inp)
	{
		$inp = trim($inp);
		$inp = stripslashes($inp);
		$inp = htmlspecialchars($inp);
		return $inp;
	}
}
