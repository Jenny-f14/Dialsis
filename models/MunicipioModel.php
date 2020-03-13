<?php

class MunicipioModel implements JsonSerializable {

    private $idMunicipio;
    private $idDepartamento;
    private $municipio;
    
 

    public function jsonSerialize() {
        return (object) get_object_vars($this);
    }


    /**
     * Get the value of idMunicipio
     */ 
    public function getIdMunicipio()
    {
        return $this->idMunicipio;
    }

    /**
     * Set the value of idMunicipio
     *
     * @return  self
     */ 
    public function setIdMunicipio($idMunicipio)
    {
        $this->idMunicipio = $idMunicipio;

        return $this;
    }

    /**
     * Get the value of idDepartamento
     */ 
    public function getIdDepartamento()
    {
        return $this->idDepartamento;
    }

    /**
     * Set the value of idDepartamento
     *
     * @return  self
     */ 
    public function setIdDepartamento($idDepartamento)
    {
        $this->idDepartamento = $idDepartamento;

        return $this;
    }

    /**
     * Get the value of municipio
     */ 
    public function getMunicipio()
    {
        return $this->municipio;
    }

    /**
     * Set the value of municipio
     *
     * @return  self
     */ 
    public function setMunicipio($municipio)
    {
        $this->municipio = $municipio;

        return $this;
    }
}
    




?>