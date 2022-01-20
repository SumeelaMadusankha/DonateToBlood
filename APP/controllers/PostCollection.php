


<?php
include_once('IteratorSystem.php');
    // include_once('test.php');
    class PostCollection implements IteratorSystem{
        private $position ;
        private $postArray ;
        
        public function __construct() {
            $this->position = 0;
            $this->postArray=array();
        }
    public function addPost($post)
    {
       $this->postArray[]=$post;
    }
        public function rewind(){
           
            $this->position = 0;
        }
    
        public function current() {
            
            return $this->postArray[$this->position];
        }
        public function key() {
           
            return $this->position;
        }
        public function next(){
            
            ++$this->position;
        }
    
        public function valid() {
           
            return isset($this->postArray[$this->position]);
        }
    }
    
    
    ?>
