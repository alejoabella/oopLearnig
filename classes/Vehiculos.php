<?php

class Vehiculos
{
    
    private $puertas;
    private $color;
    private $marca;

    public function __construct($puertas = 4, $color = '', $marca = '')
    {
        $this->puertas = $puertas;
        $this->color = $color;
        $this->marca = $marca;
    }

    protected function callToProtectedFunction()
    {
        return "OK Protected";
    }

    public function getPuertas()
    {
        return $this->puertas;
    }

    public function setPuertas($puertas)
    {
        $this->puertas = $puertas;
    }

    public function getColor()
    {
        return $this->color;
    }

    public function setColor($color)
    {
        $this->color = $color;
    }

    public function getMarca()
    {
        return $this->marca;
    }

    public function setMarca($marca)
    {
        $this->marca = $marca;
    }
}