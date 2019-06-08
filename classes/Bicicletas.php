<?php

class Bicicletas extends Vehiculos
{

    private $cambios;
    
    public function __construct($cambios)
    {
        $this->cambios = $cambios;
    }


    public static function pedalear()
    {
        echo "Pedaleando";
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