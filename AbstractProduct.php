<?php
abstract class AbstractProduct
{
    public $name;
    protected $price = 100;

    public function __construct($name)
    {
        $this->name = $name;
    }
    public function getName()
    {
        return $this->name;
    }
    abstract public function getPrice();
}
?>
