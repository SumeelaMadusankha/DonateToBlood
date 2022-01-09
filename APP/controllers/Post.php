<?php

abstract class Post extends Controller
{
private $postId;
private $requestId;
private $postedTime;
private $acceptedNic;

    function __construct()
    {
        parent:: __construct();
    }

abstract public function Loadpostpage();
abstract public function filterPost($dataArray);


}


?>