<?php


namespace App\classes;
//composer resource khujbe namespace diye
//namespace is a syntax of oop  which is used for directory
// variable is memory location address
//variable major rules
//start with $
//a-z,A-Z,0-9
//no number in first
//standard rules
//small letter
//meaning full
//readable
class Welcome
{
    public $message, $firstName,$lastName; //property declare
    //nijossho method
    public function  __construct()
    {
        // this is a own class object
        $this->message ="Welcome PHP"; //value assign
    }
    //created method of our own
    public function index()
    {
        //echo $this->message;// property print
        $this->firstName = "BASIS";
        $this->firstName = true;
        $this->lastName = 123;
        $this->lastName = 123.25;
        echo gettype($this->firstName);
        echo gettype($this->lastName);
//        echo $this->firstName . " " . $this->lastName;
//        echo $this->firstName . "&nbsp" . $this->lastName;
//        echo $this->firstName . "&nbsp &nbsp" . $this->lastName;

    }
}