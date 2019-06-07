<?php

class Coches extends Vehiculos
{

    private $motor;
    private $kilometraje;
    
    public function __construct($motor = '', $kilometraje = 128)
    {
        $this->motor = $motor;
        $this->kilometraje = $kilometraje;
    }

    public function getMotor()
    {
        return $this->motor;
    }

    public function setMotor($motor)
    {
        $this->motor = $motor;
    }

    public function getKilometraje()
    {
        return $this->kilometraje;
    }

    public function setKilometraje($kilometraje)
    {
        $this->kilometraje = $kilometraje;
    }
    
    public function callToProtectedFunctionSafe()
    {
        return $this->callToProtectedFunction();
    }

}