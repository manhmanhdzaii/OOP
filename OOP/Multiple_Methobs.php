<?php
class Muliple
{
    protected $name = "";
    protected $age = "";
    protected $address = "";
    protected $sdt = "";

    function __construct($name, $age)
    {
        $this->name = $name;
        $this->age = $age;
    }
    function setAddress($address)
    {
        $this->address = $address;
        return $this;
    }
    function setPhone($sdt)
    {
        $this->sdt = $sdt;
        return $this;
    }
    function show()
    {
        echo "Họ và tên : " . $this->name . "<br>" . "Tuổi : "
            . $this->age . "<br>" . "Quê quán : " . $this->address . "<br>" . "SĐT : " . $this->sdt . "<br>";
    }
}


$user = new Muliple('Phạm Doãn Mạnh', 22);
$user->setAddress('Ba Vì, Hà Nội')->setPhone('0123456789')->show();

?>


<!-- a -->