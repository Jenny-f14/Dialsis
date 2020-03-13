<?php

class GeneroModel implements JsonSerializable {

    private $idGenero;
    private $descripcionGenero;
    
 

    public function jsonSerialize() {
        return (object) get_object_vars($this);
    }



    /**
     * Get the value of idGenero
     */ 
    public function getIdGenero()
    {
        return $this->idGenero;
    }

    /**
     * Set the value of idGenero
     *
     * @return  self
     */ 
    public function setIdGenero($idGenero)
    {
        $this->idGenero = $idGenero;

        return $this;
    }

    /**
     * Get the value of descripcionGenero
     */ 
    public function getDescripcionGenero()
    {
        return $this->descripcionGenero;
    }

    /**
     * Set the value of descripcionGenero
     *
     * @return  self
     */ 
    public function setDescripcionGenero($descripcionGenero)
    {
        $this->descripcionGenero = $descripcionGenero;

        return $this;
    }
}
    




?>