<?php
// class Calculator
// {
//     public function add($x, $y)

//     {
//         return $x + $y;
//     }
//     public function sub($x, $y)
//     {
//         return $x - $y;
//     }

//     public function multiply($x, $y)
//     {
//         return $x - $y;
//     }

//     public function division($x, $y)
//     {
//         return $x / $y;
//     }
// }


// $calculate = new Calculator();
// echo $calculate->sub(10, 5);


// Student class

// class Student
// {
//     public $name = "Mary";
//     public $dob = 2000;

//     public function printInfo()
//     {
//         // return $this->name . "-" . $this->age;
//         return $this->name . "-" . $this->calculateAge();
//     }

//     public function calculateAge()
//     {
//         return 2022 - $this->dob;
//     }
// }

// $student = new Student();
// echo $student->printinfo();


// Constructor
class StudentInfo
{
    public $age;
    public $name;

    public function __construct($name, $age)
    {
        $this->name = $name;
        $this->age = $age;
    }

    public function printInfo()
    {
        echo $this->name . "-" . $this->age;
    }
}

$student = new StudentInfo("Momiji", 22);
$student->printInfo();
