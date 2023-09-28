<?php
class Animal
{
    public $name;
    public $legs ;
    public $cold_blooded = 'no';

    public function __construct($name, $legs=4)
    {
        $this->name = $name;
        $this->legs = $legs;
    }
}
?>


