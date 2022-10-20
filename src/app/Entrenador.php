<?php

namespace App;

class Entrenador extends Empleado
{
    private int $nivelEntrenador;
    private int $numFederacion;
    private Jugador $pupilo;

    /**
     * @param $nivelEntrenador
     * @param $numFederacion
     * @param $pupilo
     */
    public function __construct(string $nombre,string $apellidos,string $dni,string $direccion,string $cuentaCorriente, string $numeroSeguridadSocial, int $nivelEntrenador,int $numFederacion, $pupilo)
    {
        parent::__construct($dni,$nombre,$apellidos,$direccion,$cuentaCorriente,$numeroSeguridadSocial);
        $this->nivelEntrenador = $nivelEntrenador;
        $this->numFederacion = $numFederacion;
        $this->pupilo = $pupilo;
    }

    /**
     * @return int
     */
    public function getNivelEntrenador(): int
    {
        return $this->nivelEntrenador;
    }

    /**
     * @param int $nivelEntrenador
     * @return Entrenador
     */
    public function setNivelEntrenador(int $nivelEntrenador): Entrenador
    {
        $this->nivelEntrenador = $nivelEntrenador;
        return $this;
    }

    /**
     * @return int
     */
    public function getNumFederacion(): int
    {
        return $this->numFederacion;
    }

    /**
     * @param int $numFederacion
     * @return Entrenador
     */
    public function setNumFederacion(int $numFederacion): Entrenador
    {
        $this->numFederacion = $numFederacion;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getPupilo()
    {
        return $this->pupilo;
    }

    /**
     * @param mixed $pupilo
     * @return Entrenador
     */
    public function setPupilo(Jugador $pupilo):Entrenador
    {
        $this->pupilo = $pupilo;
        return $this;
    }

}