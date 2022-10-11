<?php

class Parentss
{
    protected $name;
    protected $age;
    function __construct($name, $age)
    {
        $this->name = $name;
        $this->age = $age;
    }
}

class Children extends Parentss
{

    function show()
    {
        echo "Họ và tên : " . $this->name . "<br>" . "Tuổi : " . $this->age . "<br>";
    }
}

$user = new Children('Phạm Doãn Mạnh', 22);
$user->show();

?>
<!-- a -->