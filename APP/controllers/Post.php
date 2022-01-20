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
    public function getPostId()
    {
        return $this->postId;
    }

    public function setPostId($postId)
    {
        $this->postId = $postId;
    }

    public function getRequestId()
    {
        return $this->requestId;
    }

    public function setRequestId($requestId)
    {
        $this->requestId = $requestId;
    }

    public function getPostedTime()
    {
        return $this->postedTime;
    }


    public function setPostedTime($postedTime)
    {
        $this->postedTime = $postedTime;
    }

    public function getAcceptedNic()
    {
        return $this->acceptedNic;
    }

    public function setAcceptedNic($acceptedNic)
    {
        $this->acceptedNic = $acceptedNic;
    }
abstract public function Loadpostpage();
abstract public function filterPost($dataArray);
abstract public function expiredPost($district);

}


?>