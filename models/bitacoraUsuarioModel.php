<?php

class bitacoraUsuario implements JsonSerializable{

    private $id;
    private $idUsuario;
    private $tipousuario;
    private $estado;
    private $fechaVencimiento;
    private $accionRealizada;
    private $tablaAfecta;
    private $columnaModificada;
    private $valorAntiguo;
    private $valorNuevo;
    private $fechaModificacion;


    /**
     * Get the value of id
     */ 
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set the value of id
     *
     * @return  self
     */ 
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Get the value of idUsuario
     */ 
    public function getIdUsuario()
    {
        return $this->idUsuario;
    }

    /**
     * Set the value of idUsuario
     *
     * @return  self
     */ 
    public function setIdUsuario($idUsuario)
    {
        $this->idUsuario = $idUsuario;

        return $this;
    }

    /**
     * Get the value of tipousuario
     */ 
    public function getTipousuario()
    {
        return $this->tipousuario;
    }

    /**
     * Set the value of tipousuario
     *
     * @return  self
     */ 
    public function setTipousuario($tipousuario)
    {
        $this->tipousuario = $tipousuario;

        return $this;
    }

    /**
     * Get the value of estado
     */ 
    public function getEstado()
    {
        return $this->estado;
    }

    /**
     * Set the value of estado
     *
     * @return  self
     */ 
    public function setEstado($estado)
    {
        $this->estado = $estado;

        return $this;
    }

    /**
     * Get the value of fechaVencimiento
     */ 
    public function getFechaVencimiento()
    {
        return $this->fechaVencimiento;
    }

    /**
     * Set the value of fechaVencimiento
     *
     * @return  self
     */ 
    public function setFechaVencimiento($fechaVencimiento)
    {
        $this->fechaVencimiento = $fechaVencimiento;

        return $this;
    }

    /**
     * Get the value of accionRealizada
     */ 
    public function getAccionRealizada()
    {
        return $this->accionRealizada;
    }

    /**
     * Set the value of accionRealizada
     *
     * @return  self
     */ 
    public function setAccionRealizada($accionRealizada)
    {
        $this->accionRealizada = $accionRealizada;

        return $this;
    }

    /**
     * Get the value of tablaAfecta
     */ 
    public function getTablaAfecta()
    {
        return $this->tablaAfecta;
    }

    /**
     * Set the value of tablaAfecta
     *
     * @return  self
     */ 
    public function setTablaAfecta($tablaAfecta)
    {
        $this->tablaAfecta = $tablaAfecta;

        return $this;
    }

    /**
     * Get the value of columnaModificada
     */ 
    public function getColumnaModificada()
    {
        return $this->columnaModificada;
    }

    /**
     * Set the value of columnaModificada
     *
     * @return  self
     */ 
    public function setColumnaModificada($columnaModificada)
    {
        $this->columnaModificada = $columnaModificada;

        return $this;
    }

    /**
     * Get the value of valorAntiguo
     */ 
    public function getValorAntiguo()
    {
        return $this->valorAntiguo;
    }

    /**
     * Set the value of valorAntiguo
     *
     * @return  self
     */ 
    public function setValorAntiguo($valorAntiguo)
    {
        $this->valorAntiguo = $valorAntiguo;

        return $this;
    }

    /**
     * Get the value of valorNuevo
     */ 
    public function getValorNuevo()
    {
        return $this->valorNuevo;
    }

    /**
     * Set the value of valorNuevo
     *
     * @return  self
     */ 
    public function setValorNuevo($valorNuevo)
    {
        $this->valorNuevo = $valorNuevo;

        return $this;
    }

    /**
     * Get the value of fechaModificacion
     */ 
    public function getFechaModificacion()
    {
        return $this->fechaModificacion;
    }

    /**
     * Set the value of fechaModificacion
     *
     * @return  self
     */ 
    public function setFechaModificacion($fechaModificacion)
    {
        $this->fechaModificacion = $fechaModificacion;

        return $this;
    }
}





?>