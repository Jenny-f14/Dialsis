<?php  

class Clinica implements JsonSerializable {
    private $idClinica;
    private $idDepartamento;
    private $nombreClinica;

    public function jsonSerialize() {
        return (object) get_object_vars($this);
    }

    /**
     * Get the value of idClinica
     */ 
    public function getIdClinica()
    {
        return $this->idClinica;
    }

    /**
     * Set the value of idClinica
     *
     * @return  self
     */ 
    public function setIdClinica($idClinica)
    {
        $this->idClinica = $idClinica;

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
     * Get the value of nombreClinica
     */ 
    public function getNombreClinica()
    {
        return $this->nombreClinica;
    }

    /**
     * Set the value of nombreClinica
     *
     * @return  self
     */ 
    public function setNombreClinica($nombreClinica)
    {
        $this->nombreClinica = $nombreClinica;

        return $this;
    }
}

?>