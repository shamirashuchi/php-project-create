<?php


namespace App\classes;
//composer resource khujbe namespace diye
//namespace is a syntax of oop  which is used for directory

class Welcome
{
    public $message; //property declare
    //nijossho method
    public function  __construct()
    {
        // this is a own class object
        $this->message ="Welcome PHP"; //value assign
    }
    //created method of our own
    public function index()
    {
        echo $this->message;// property print
    }
}