<?php 

class PacienteModel implements JsonSerializable {

    private $idPaciente;
    private $idClinica;
    private $clinica;
    private $idPrograma;
    private $idTurno;
    private $idReferencia;
    private $idDireccion;
    private $idTipoAcceso;
    private $idPatologia;
    private $codigoPaciente;
    private $nombrePac;
    private $apellidoPac;
    private $identidadPac;
    private $expediente;
    private $fechaIng;
    private $tratamietoPorSemana;
    private $edad;
    private $genero;
    private $telefonoPac;
    private $estadoCivil;

    public function jsonSerialize() {
        return (object) get_object_vars($this);
    }
    
    /**
     * Get the value of idPaciente
     */ 
    public function getIdPaciente()
    {
        return $this->idPaciente;
    }

    /**
     * Set the value of idPaciente
     *
     * @return  self
     */ 
    public function setIdPaciente($idPaciente)
    {
        $this->idPaciente = $idPaciente;

        return $this;
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
     * Get the value of idPrograma
     */ 
    public function getIdPrograma()
    {
        return $this->idPrograma;
    }

    /**
     * Set the value of idPrograma
     *
     * @return  self
     */ 
    public function setIdPrograma($idPrograma)
    {
        $this->idPrograma = $idPrograma;

        return $this;
    }

    /**
     * Get the value of idTurno
     */ 
    public function getIdTurno()
    {
        return $this->idTurno;
    }

    /**
     * Set the value of idTurno
     *
     * @return  self
     */ 
    public function setIdTurno($idTurno)
    {
        $this->idTurno = $idTurno;

        return $this;
    }

    /**
     * Get the value of idReferencia
     */ 
    public function getIdReferencia()
    {
        return $this->idReferencia;
    }

    /**
     * Set the value of idReferencia
     *
     * @return  self
     */ 
    public function setIdReferencia($idReferencia)
    {
        $this->idReferencia = $idReferencia;

        return $this;
    }

    /**
     * Get the value of idDireccion
     */ 
    public function getIdDireccion()
    {
        return $this->idDireccion;
    }

    /**
     * Set the value of idDireccion
     *
     * @return  self
     */ 
    public function setIdDireccion($idDireccion)
    {
        $this->idDireccion = $idDireccion;

        return $this;
    }

    /**
     * Get the value of idPatologia
     */ 
    public function getIdPatologia()
    {
        return $this->idPatologia;
    }

    /**
     * Set the value of idPatologia
     *
     * @return  self
     */ 
    public function setIdPatologia($idPatologia)
    {
        $this->idPatologia = $idPatologia;

        return $this;
    }

    /**
     * Get the value of codigoPaciente
     */ 
    public function getCodigoPaciente()
    {
        return $this->codigoPaciente;
    }

    /**
     * Set the value of codigoPaciente
     *
     * @return  self
     */ 
    public function setCodigoPaciente($codigoPaciente)
    {
        $this->codigoPaciente = $codigoPaciente;

        return $this;
    }

    /**
     * Get the value of nombrePac
     */ 
    public function getNombrePac()
    {
        return $this->nombrePac;
    }

    /**
     * Set the value of nombrePac
     *
     * @return  self
     */ 
    public function setNombrePac($nombrePac)
    {
        $this->nombrePac = $nombrePac;

        return $this;
    }

    /**
     * Get the value of apellidoPac
     */ 
    public function getApellidoPac()
    {
        return $this->apellidoPac;
    }

    /**
     * Set the value of apellidoPac
     *
     * @return  self
     */ 
    public function setApellidoPac($apellidoPac)
    {
        $this->apellidoPac = $apellidoPac;

        return $this;
    }

    /**
     * Get the value of identidadPac
     */ 
    public function getIdentidadPac()
    {
        return $this->identidadPac;
    }

    /**
     * Set the value of identidadPac
     *
     * @return  self
     */ 
    public function setIdentidadPac($identidadPac)
    {
        $this->identidadPac = $identidadPac;

        return $this;
    }

    /**
     * Get the value of expediente
     */ 
    public function getExpediente()
    {
        return $this->expediente;
    }

    /**
     * Set the value of expediente
     *
     * @return  self
     */ 
    public function setExpediente($expediente)
    {
        $this->expediente = $expediente;

        return $this;
    }

    /**
     * Get the value of fechaIng
     */ 
    public function getFechaIng()
    {
        return $this->fechaIng;
    }

    /**
     * Set the value of fechaIng
     *
     * @return  self
     */ 
    public function setFechaIng($fechaIng)
    {
        $this->fechaIng = $fechaIng;

        return $this;
    }

    /**
     * Get the value of tratamietoPorSemana
     */ 
    public function getTratamietoPorSemana()
    {
        return $this->tratamietoPorSemana;
    }

    /**
     * Set the value of tratamietoPorSemana
     *
     * @return  self
     */ 
    public function setTratamietoPorSemana($tratamietoPorSemana)
    {
        $this->tratamietoPorSemana = $tratamietoPorSemana;

        return $this;
    }

    /**
     * Get the value of edad
     */ 
    public function getEdad()
    {
        return $this->edad;
    }

    /**
     * Set the value of edad
     *
     * @return  self
     */ 
    public function setEdad($edad)
    {
        $this->edad = $edad;

        return $this;
    }

    /**
     * Get the value of genero
     */ 
    public function getGenero()
    {
        return $this->genero;
    }

    /**
     * Set the value of genero
     *
     * @return  self
     */ 
    public function setGenero($genero)
    {
        $this->genero = $genero;

        return $this;
    }

    /**
     * Get the value of telefonoPac
     */ 
    public function getTelefonoPac()
    {
        return $this->telefonoPac;
    }

    /**
     * Set the value of telefonoPac
     *
     * @return  self
     */ 
    public function setTelefonoPac($telefonoPac)
    {
        $this->telefonoPac = $telefonoPac;

        return $this;
    }

    /**
     * Get the value of estadoCivil
     */ 
    public function getEstadoCivil()
    {
        return $this->estadoCivil;
    }

    /**
     * Set the value of estadoCivil
     *
     * @return  self
     */ 
    public function setEstadoCivil($estadoCivil)
    {
        $this->estadoCivil = $estadoCivil;

        return $this;
    }

    /**
     * Get the value of idTipoAcceso
     */ 
    public function getIdTipoAcceso()
    {
        return $this->idTipoAcceso;
    }

    /**
     * Set the value of idTipoAcceso
     *
     * @return  self
     */ 
    public function setIdTipoAcceso($idTipoAcceso)
    {
        $this->idTipoAcceso = $idTipoAcceso;

        return $this;
    }

    /**
     * Get the value of clinica
     */ 
    public function getClinica()
    {
        return $this->clinica;
    }

    /**
     * Set the value of clinica
     *
     * @return  self
     */ 
    public function setClinica($clinica)
    {
        $this->clinica = $clinica;

        return $this;
    }
}


?>