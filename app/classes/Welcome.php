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
    public $message, $firstName,$lastName,$firstNumber,$secondNumber,$result; //property declare
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
//        $this->firstName = "BASIS";
//        $this->firstName = true;
//        $this->lastName = 123;
//        $this->lastName = 123.25;
//        echo gettype($this->firstName);
//        echo gettype($this->lastName);
        //&nbsp for space
//        echo $this->firstName . " " . $this->lastName;
//        echo $this->firstName . "&nbsp" . $this->lastName;
//        echo $this->firstName . "&nbsp &nbsp" . $this->lastName;


        //Operator
        //a syntax for doing many task
        $this->firstNumber =10;
        $this->secondNumber =20;
        $this->result      = 30;



        //nor operator
//        $this->r = true;
//        $this->y = false;
//        echo $this->r ;//1
//        echo '<br/>============================<br/>';
//        echo !$this->r ;//blank
//        echo '<br/>============================<br/>';
//        echo $this->y ;//blank
//        echo '<br/>============================<br/>';
//        echo !$this->y ;//1
//        echo '<br/>============================<br/>';




        //logical operator
//        echo '<br/>=========================<br/>';
//        echo $this->firstNumber < $this->secondNumber  && $this->firstNumber < $this->result;//1
//
//        echo '<br/>=========================<br/>';
//        echo $this->firstNumber > $this->secondNumber  && $this->firstNumber > $this->result;//blank
//
//        echo '<br/>=========================<br/>';
//        echo $this->firstNumber < $this->secondNumber  && $this->firstNumber > $this->result;//blank
//
//        echo '<br/>=========================<br/>';
//        echo $this->firstNumber > $this->secondNumber  && $this->firstNumber < $this->result;//blank




//        echo '<br/>=========================<br/>';
//        echo $this->firstNumber < $this->secondNumber  || $this->firstNumber < $this->result;//1
//
//        echo '<br/>=========================<br/>';
//        echo $this->firstNumber > $this->secondNumber  || $this->firstNumber > $this->result;//blank
//
//        echo '<br/>=========================<br/>';
//        echo $this->firstNumber < $this->secondNumber  || $this->firstNumber > $this->result;//1
//
//        echo '<br/>=========================<br/>';
//        echo $this->firstNumber > $this->secondNumber  || $this->firstNumber < $this->result;//1








        //conditional operator
        //true hole 1
        //false hole kisu ase na ba blank
//        echo '<br/>';
//        echo $this->firstNumber > $this->secondNumber;
//
//
//        echo '<br/>';
//        echo $this->firstNumber >= $this->secondNumber;
//
//
//        echo '<br/>';
//        echo $this->firstNumber < $this->secondNumber;
//
//
//        echo '<br/>';
//        echo $this->firstNumber <= $this->secondNumber;
//
//        echo '<br/>';
//        echo $this->firstNumber == $this->secondNumber;
//
//        echo '<br/>';
//        echo $this->firstNumber != $this->secondNumber;
//
//        echo '<br/>';
//        echo $this->firstNumber === $this->secondNumber;
//
//        echo '<br/>';
//        echo $this->firstNumber !== $this->secondNumber;













        //Assignable operator
//        echo '<br/>';
//        echo $this->firstNumber += $this->secondNumber;//30//$this->firstNumber = $this->firstNumber + $this->secondNumber
//
//        echo '<br/>';
//        echo $this->firstNumber -= $this->secondNumber;//10//$this->firstNumber = $this->firstNumber - $this->secondNumber
//
//        echo '<br/>';
//        echo $this->firstNumber *= $this->secondNumber;//200
//
//        echo '<br/>';
//        echo $this->firstNumber /= $this->secondNumber;//10
//
//        echo '<br/>';
//        echo $this->firstNumber %= $this->secondNumber;//10
//
//        echo '<br/>';
//        echo $this->firstNumber .= $this->secondNumber;//1020  // . mane concate






//arithmatic operator
//        echo - $this->firstNumber;//negative to positive and positive to negative
//        echo '<br/>';
//        echo $this->firstNumber + $this->secondNumber;
//
//
//        echo '<br/>';
//        echo $this->firstNumber - $this->secondNumber;
//
//        echo '<br/>';
//        echo $this->firstNumber * $this->secondNumber;
//
//        echo '<br/>';
//        echo $this->firstNumber / $this->secondNumber;
//
//        echo '<br/>';
//        echo $this->firstNumber % $this->secondNumber;


        //php do  interprate
        //echo part,$this->firstNumber part ,++ part
        //part part execute kore tai   echo $this->firstNumber++; give 20 then updated to 21
//        echo '<br/>';
//        echo $this->firstNumber++;//post increment 20
//        echo '<br/>';
//        echo $this->firstNumber;//21
//        echo '<br/>';
//        echo ++$this->firstNumber;//pre increment 22
//        echo '<br/>';
//        echo $this->firstNumber;
//
//
//        echo '<br/>';
//        echo --$this->firstNumber;//pre deccrement 21
//        echo '<br/>';
//        echo $this->firstNumber--;//21
//        echo '<br/>';
//        echo $this->firstNumber--;//post decrement 20
//        echo '<br/>';
//        echo --$this->firstNumber;//18
    }


}