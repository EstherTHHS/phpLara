<?php

class Student
{
    // public $name;
    // public $age;
    protected $name;
    protected $age;

    public function __construct($nameInfo, $ageInfo)
    {
        $this->name = $nameInfo;
        $this->age = $ageInfo;
    }
}

class Coder extends Student
{

    public function printInfo()
    {
        return $this->name . "-" . $this->age;
    }
}

$student = new Coder("Mary", 25);

// $student->name = "Esther";
echo $student->printInfo();


// $student0 = new Student();
// $student0->name = "Lana Del Ray";
// $student0->age = 25;


// $student1 = new Student();
// $student1->name = "Yuki ";
// $student1->age = 26;

// var_dump($student0, $student1);
