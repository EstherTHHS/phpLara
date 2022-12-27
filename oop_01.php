<?php
class John
{
    public $name = "John";
    public function message()
    {

        return "Hello World from John Doe";
    }
}

// Create an object from class-Instantiation
$john = new John();
// var_dump($john);
// -> is a object operator 
// Calling function from object
echo $john->message();
//Using variable from object
echo $john->name;
