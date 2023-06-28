<?php
$a = 111;
$b = '111';

if ($a === $b) {
    echo $a . ' they are equal, so their types are similar ';
} else if ($a == $b) {
    echo $a . $b . ' they are equal by value, but their types may be different ';
}

$text = 'hello';
$text1 = $text . ' world';
echo $text1;
$text .= 'world';
echo $text;

$str = 'Some text for tests';
echo strlen($str);
echo strpos($str, 'e');
echo strtolower($str);
echo strtoupper($str);
echo str_replace('tests', 'fun', $str);
echo substr($str, 0, 10);

var_dump($a + $b);


$arr = array(1, 2, 3, 4);
foreach ($arr as &$value) {
    $value = $value * 2;
    echo '   ' .$value;
}

class Singleton
{
    private static $instances = null;

    private function __construct()
    {
    }
    static public function getInstance()
    {
        if (is_null(self::$instances)) {
            self::$instances = new static();
        }
        return self::$instances;
    }
}

$a1 = Singleton::getInstance();
$a2 = Singleton::getInstance();
if ($a1 === $a2)
{
    echo 'They are equal';
}

class Human
{
    private $name;
    private $age;

    public function __construct($name, $age){
        $this->name = $name;
        $this->age = $age;
    }

    public function getName(){
        return $this->name;
    }

    public function setName($name){
        $this->name = $name;
    }

    public function getAge(){
        return $this->age;
    }

    public function setAge($age){
        $this->age = $age;
    }
}

class Student extends Human {
    private $group;
    private $university;

    public function __construct($group, $university)
    {
        parent::__construct($this->getName(), $this->getAge());
        $this->group = $group;
        $this->university = $university;
    }

    public function setUniversity($university)
    {
        $this->university = $university;
    }

    public function getUniversity()
    {
        return $this->university;
    }

    public function getGroup()
    {
        return $this->group;
    }

    public function setGroup($group)
    {
        $this->group = $group;
    }
}
$example = new Human('Alex', '41');
echo $example->getAge()






























?>