<?php

class Mobil
{
    private $warna;
    private $merk;
    private $harga;

    function __construct()
    {
        $this->warna = "Biru";
        $this->merk = "BMW";
        $this->harga = "1000";
    }

    function setColor($color)
    {
        $this->warna = $color;
    }

    function setMerk($merk)
    {
        $this->merk = $merk;
    }

    function setPrice($price)
    {
        $this->harga = $price;
    }

    function printColor()
    {
        echo $this->warna . "</br>";
    }

    function printMerk()
    {
        echo $this->merk . "</br>";
    }

    function printPrice()
    {
        echo $this->harga . "</br>";
    }
}

$bmw = new Mobil();
$bmw->printColor();
$bmw->printMerk();
$bmw->printPrice();
