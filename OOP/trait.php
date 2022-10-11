<?php

trait Parents
{

    function __construct($name, $value)
    {
        $this->name = $name;
        $this->value = $value;
    }
}
class Children
{
    public $name;
    public $value;

    use Parents;

    function show()
    {
        echo "Họ và tên : " . $this->name . "<br>" . "Tuổi : " . $this->value . "<br>";
    }
}
$user = new Children('Phạm Doãn Mạnh', 22);
$user->show();
?>
<!-- a -->