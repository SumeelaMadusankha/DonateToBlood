<?php
interface IteratorSystem{
    public function current();
    public function key();
    public function next();
    public function rewind();
    public function valid();
}
?>