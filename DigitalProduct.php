<?php
class DigitalProduct extends AbstractProduct
{
    public function getPrice()
    {
        return $this->price / 2;
    }
}
?>
