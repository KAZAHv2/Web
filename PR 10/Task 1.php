<?php
class Worker{
    public $name, $age, $salary;
}
$worker1 = new Worker();
$worker1 -> name = 'Іван';
$worker1 -> age = 25;
$worker1 -> salary = 1000;
$worker2 = new Worker();
$worker2 -> name = 'Василь';
$worker2 -> age = 26;
$worker2 -> salary = 2000;
$sumSalary = $worker1 -> salary + $worker2 -> salary;
$sumAge = $worker1 -> age + $worker2 -> age;
echo "Amount of salary: $sumSalary<br>";
echo "Amount of age: $sumAge<br>";
?>
