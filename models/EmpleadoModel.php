<?php 

class EmpleadoModel implements JsonSerializable {

    private $idEmpleado;
    private $idMunicipio;
    private $primerNombre;
    private $segundoNombre;
    private $primerApellido;
    private $segundoApellido;
    private $identidad;
    private $fechaNacimiento;
    private $idEstadoCivil;
    private $idGenero;
    private $telefono;
    private $direccion;
    private $correo;
    private $empleadoEstado;


    public function jsonSerialize() {
        return (object) get_object_vars($this);
    }

    


    /**
     * Get the value of idEmpleado
     */ 
    public function getIdEmpleado()
    {
        return $this->idEmpleado;
    }

    /**
     * Set the value of idEmpleado
     *
     * @return  self
     */ 
    public function setIdEmpleado($idEmpleado)
    {
        $this->idEmpleado = $idEmpleado;

        return $this;
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
     * Get the value of primerNombre
     */ 
    public function getPrimerNombre()
    {
        return $this->primerNombre;
    }

    /**
     * Set the value of primerNombre
     *
     * @return  self
     */ 
    public function setPrimerNombre($primerNombre)
    {
        $this->primerNombre = $primerNombre;

        return $this;
    }

    /**
     * Get the value of segundoApellido
     */ 
    public function getSegundoApellido()
    {
        return $this->segundoApellido;
    }

    /**
     * Set the value of segundoApellido
     *
     * @return  self
     */ 
    public function setSegundoApellido($segundoApellido)
    {
        $this->segundoApellido = $segundoApellido;

        return $this;
    }

    /**
     * Get the value of primerApellido
     */ 
    public function getPrimerApellido()
    {
        return $this->primerApellido;
    }

    /**
     * Set the value of primerApellido
     *
     * @return  self
     */ 
    public function setPrimerApellido($primerApellido)
    {
        $this->primerApellido = $primerApellido;

        return $this;
    }

   

    /**
     * Get the value of identidad
     */ 
    public function getIdentidad()
    {
        return $this->identidad;
    }

    /**
     * Set the value of identidad
     *
     * @return  self
     */ 
    public function setIdentidad($identidad)
    {
        $this->identidad = $identidad;

        return $this;
    }

    /**
     * Get the value of fechaNacimiento
     */ 
    public function getFechaNacimiento()
    {
        return $this->fechaNacimiento;
    }

    /**
     * Set the value of fechaNacimiento
     *
     * @return  self
     */ 
    public function setFechaNacimiento($fechaNacimiento)
    {
        $this->fechaNacimiento = $fechaNacimiento;

        return $this;
    }

    


    /**
     * Get the value of telefono
     */ 
    public function getTelefono()
    {
        return $this->telefono;
    }

    /**
     * Set the value of telefono
     *
     * @return  self
     */ 
    public function setTelefono($telefono)
    {
        $this->telefono = $telefono;

        return $this;
    }

    /**
     * Get the value of direccion
     */ 
    public function getDireccion()
    {
        return $this->direccion;
    }

    /**
     * Set the value of direccion
     *
     * @return  self
     */ 
    public function setDireccion($direccion)
    {
        $this->direccion = $direccion;

        return $this;
    }

    /**
     * Get the value of segundoNombre
     */ 
    public function getSegundoNombre()
    {
        return $this->segundoNombre;
    }

    /**
     * Set the value of segundoNombre
     *
     * @return  self
     */ 
    public function setSegundoNombre($segundoNombre)
    {
        $this->segundoNombre = $segundoNombre;

        return $this;
    }

    
    /**
     * Get the value of empleadoEstado
     */ 
    public function getEmpleadoEstado()
    {
        return $this->empleadoEstado;
    }

    /**
     * Set the value of empleadoEstado
     *
     * @return  self
     */ 
    public function setEmpleadoEstado($empleadoEstado)
    {
        $this->empleadoEstado = $empleadoEstado;

        return $this;
    }

    /**
     * Get the value of correo
     */ 
    public function getCorreo()
    {
        return $this->correo;
    }

    /**
     * Set the value of correo
     *
     * @return  self
     */ 
    public function setCorreo($correo)
    {
        $this->correo = $correo;

        return $this;
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
}
    


     