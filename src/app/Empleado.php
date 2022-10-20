<?php

namespace App;

class Empleado extends Persona
{
   private string $direccion;
   private string $cuentaCorriente;
   private string $numSeguridadSocial;
   private HorarioMensual $horario;
   private  float $precioPorHora;
   private  bool $disponible;

    /**
     * @param $direccion
     * @param $cuentaCorriente
     * @param $numSeguridadSocial
     */
    public function __construct(string $nombre, string $apellidos,string $dni, string $direccion,string $cuentaCorriente, string $numSeguridadSocial)
    {
        PARENT::__construct($dni,$nombre,$apellidos);
        $this->direccion = $direccion;
        $this->cuentaCorriente = $cuentaCorriente;
        $this->numSeguridadSocial = $numSeguridadSocial;
        $this->disponible=true;
    }

    /**
     * @return string
     */
    public function getDireccion(): string
    {
        return $this->direccion;
    }

    /**
     * @param string $direccion
     * @return Empleado
     */
    public function setDireccion(string $direccion): Empleado
    {
        $this->direccion = $direccion;
        return $this;
    }

    /**
     * @return string
     */
    public function getCuentaCorriente(): string
    {
        return $this->cuentaCorriente;
    }

    /**
     * @param string $cuentaCorriente
     * @return Empleado
     */
    public function setCuentaCorriente(string $cuentaCorriente): Empleado
    {
        $this->cuentaCorriente = $cuentaCorriente;
        return $this;
    }

    /**
     * @return string
     */
    public function getNumSeguridadSocial(): string
    {
        return $this->numSeguridadSocial;
    }

    /**
     * @param string $numSeguridadSocial
     * @return Empleado
     */
    public function setNumSeguridadSocial(string $numSeguridadSocial): Empleado
    {
        $this->numSeguridadSocial = $numSeguridadSocial;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getHorario()
    {
        return $this->horario;
    }

    /**
     * @param mixed $horario
     * @return Empleado
     */
    public function setHorario($horario)
    {
        $this->horario = $horario;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getPrecioPorHora():float
    {
        return $this->precioPorHora;
    }

    /**
     * @param mixed $precioPorHora
     * @return Empleado
     */
    public function setPrecioPorHora($precioPorHora):Empleado
    {
        $this->precioPorHora = $precioPorHora;
        return $this;
    }

    /**
     * @return bool
     */
    public function isDisponible(): bool
    {
        return $this->disponible;
    }

    /**
     * @param bool $disponible
     * @return Empleado
     */
    public function setDisponible(bool $disponible): Empleado
    {
        $this->disponible = $disponible;
        return $this;
    }


}