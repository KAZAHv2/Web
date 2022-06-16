<?php

class Worker extends User{
    private $salary;
    public function setSalary($salary){
        $this -> salary = $salary;
    }

    public function getSalary(){
        return $this -> salary;
    }
}

$worker1 = new Worker();
$worker1 -> setName ('Іван');
$worker1 -> setAge = (25);
$worker1 -> setSalary = (1000);

$worker2 = new Worker();
$worker2 -> setName ('Василь');
$worker2 -> setAge (26);
$worker2 -> setSalary (2000);

echo "Amount of salary:" .($worker1 -> getSalary() + $worker2 -> getSalary())."<br>";

class Student extends User{
    private $scholarship, $course;

    public function setScholarship(){
        $this -> scholarship = $scholarship;
    }

    public function getScholarship(){
        return $this -> scholarship;
    }

    public function setCourse(){
        $this -> course = $course;
    }

    public function getCourse(){
        $this -> course;
    }

}

?>
