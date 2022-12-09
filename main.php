<?php 
echo "<br><h3>Задача 1</h3><br>";
class User
{ 
    public $name, $surname;
    function __construct($name, $surname)
    {
        $this->name = $name;
        $this->surname = $surname;
    }
    function sayHello()
    {
        echo "Hello $this->name $this->surname<br>";
    }
}
$tom = new User("Tom", "Piterson");
$tom -> sayHello();



echo "<br><h3>Задача 2</h3><br>";
class Person
{
    public $name = "Undefined", $age = 18, $salary = 1000;
    function displayInfo()
    {
        echo "Name: $this->name; Age: $this->age; Salary: $this->salary <br>";
    }

    private function checkAge($age)
    {
        if($age >= 1 && $age <= 100){
            return true;
        } else{
            return false;
        }
    }
    
    function setAge($value)
    {
        if($this->checkAge($value)){
            $this->age = $value;
        } else{
            echo("Введите корректные данные: Age от 1 до 100<br>");
        }
    }
}
$ivan = new Person();
$ivan -> name = "Ivan";
$ivan -> age = 25;
$ivan -> salary = 1001;
$ivan -> displayInfo();

$vasya = new Person();
$vasya -> name = "Vasya";
$vasya -> age = 26;
$vasya -> salary = 2000;
$vasya -> setAge(110);
$vasya -> displayInfo();

echo (" Суммаа зарплат " . $salarySum = $ivan -> salary + $vasya -> salary . "; Сумма возрастов ");
echo ($salarySum = $ivan -> age + $vasya -> age);
?>