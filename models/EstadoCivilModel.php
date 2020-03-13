<?php

class EstadoCivilModel implements JsonSerializable {

    private $idEstadoCivil;
    private $descripcionEstadoCivil;
    
 

    public function jsonSerialize() {
        return (object) get_object_vars($this);
    }


    /**
     * Get the value of idEstadoCivil
     */ 
    public function getIdEstadoCivil()
    {
        return $this->idEstadoCivil;
    }

    /**
     * Set the value of idEstadoCivil
     *
     * @return  self
     */ 
    public function setIdEstadoCivil($idEstadoCivil)
    {
        $this->idEstadoCivil = $idEstadoCivil;

        return $this;
    }

    /**
     * Get the value of descripcionEstadoCivil
     */ 
    public function getDescripcionEstadoCivil()
    {
        return $this->descripcionEstadoCivil;
    }

    /**
     * Set the value of descripcionEstadoCivil
     *
     * @return  self
     */ 
    public function setDescripcionEstadoCivil($descripcionEstadoCivil)
    {
        $this->descripcionEstadoCivil = $descripcionEstadoCivil;

        return $this;
    }
}
    




?>