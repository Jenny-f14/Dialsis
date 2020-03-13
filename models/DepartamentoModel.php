<?php

class DepartamentoModel implements JsonSerializable {

    private $idDepartamento;
    private $idPais;
    private $departamento;
    
 

    public function jsonSerialize() {
        return (object) get_object_vars($this);
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
     * Get the value of idPais
     */ 
    public function getIdPais()
    {
        return $this->idPais;
    }

    /**
     * Set the value of idPais
     *
     * @return  self
     */ 
    public function setIdPais($idPais)
    {
        $this->idPais = $idPais;

        return $this;
    }

    /**
     * Get the value of departamento
     */ 
    public function getDepartamento()
    {
        return $this->departamento;
    }

    /**
     * Set the value of departamento
     *
     * @return  self
     */ 
    public function setDepartamento($departamento)
    {
        $this->departamento = $departamento;

        return $this;
    }
}
    




?>