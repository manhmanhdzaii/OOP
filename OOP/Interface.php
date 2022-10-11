<?php

interface Name
{
    function setName($name);
}
interface Age
{
    function setAge($age);
}
class Users implements Name, Age
{
    protected $name = "";
    protected $age = "";
    function setName($name)
    {
        $this->name = $name;
        return $this;
    }
    function setAge($age)
    {
        $this->age = $age;
        return $this;
    }
    function show()
    {
        echo "Họ và tên : " . $this->name . "<br>" . "Tuổi : " . $this->age . "<br>";
    }
}

$users = new Users();
$users->setName("Phạm Doãn Mạnh")->setAge(22)->show();


?>

<!-- a -->