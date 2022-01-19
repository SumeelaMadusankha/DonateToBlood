<?php
include_once('Person.php');
session_start();
abstract class Admin extends Person
{

    function __construct()
    {
        parent:: __construct();
    }





}


?>