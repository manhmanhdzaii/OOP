<?php

abstract class Parents
{
    abstract public function getName();
    function getAge($age)
    {
        echo "Tuổi của bạn là : " . $age;
    }
}

class Children extends Parents
{
    protected $name = "";
    function __construct($name)
    {
        $this->name = $name;
    }
    function getName()
    {
        echo "Tên của bạn là : " . $this->name . "<br>";
    }
}

$user = new Children('Phạm Doãn Mạnh');
$user->getName();
$user->getAge(22);

?>
<!-- a -->