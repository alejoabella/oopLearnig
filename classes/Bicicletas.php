<?php

class Bicicleta extends Vehiculos
{

    private $cambios;
    
    public function __construct($cambios)
    {
        $this->cambios = $cambios;
    }


    /**
     * Get the value of cambios
     */ 
    public function getCambios()
    {
        return $this->cambios;
    }

    /**
     * Set the value of cambios
     *
     * @return  self
     */ 
    public function setCambios($cambios)
    {
        $this->cambios = $cambios;

        return $this;
    }
    
}