<?php

namespace App;

class Jugador extends Persona
{
 private int $nivelJuego;
 private ManoPreferida $manoHabil;
 private LadoPreferido $ladoPreferido;
 private int $indiceDeIrresponibilidad;
 private int $numFederacion;
 private HorarioMensual $horarioMensualPreferido;
 private  bool $renovacionAutomaticaHorario;
 private Fisioterapia $fisioAsociado;
 private Entrenador $entrenadorPersonal;
 private bool $mixtas;
 private int $socio;

    /**
     * @param int $nivelJuego
     * @param ManoPreferida $manoHabil
     * @param LadoPreferido $ladoPreferido
     * @param int $indiceDeIrresponibilidad
     * @param int $numFederacion
     * @param HorarioMensual $horarioMensualPreferido
     * @param bool $renovacionAutomaticaHorario
     * @param Fisioterapia $fisioAsociado
     * @param Entrenador $entrenadorPersonal
     * @param bool $mixtas
     * @param int $socio
     */
    public function __construct(string $dni, string $nombre, string $apellidos, int $nivelJuego, ManoPreferida $manoHabil, LadoPreferido $ladoPreferido, int $indiceDeIrresponibilidad, int $numFederacion, HorarioMensual $horarioMensualPreferido, bool $renovacionAutomaticaHorario, Fisioterapia $fisioAsociado, Entrenador $entrenadorPersonal, bool $mixtas, int $socio)
    {
        parent::__construct($dni,$nombre,$apellidos);
        $this->nivelJuego = $nivelJuego;
        $this->manoHabil = $manoHabil;
        $this->ladoPreferido = $ladoPreferido;
        $this->indiceDeIrresponibilidad = $indiceDeIrresponibilidad;
        $this->numFederacion = $numFederacion;
        $this->horarioMensualPreferido = $horarioMensualPreferido;
        $this->renovacionAutomaticaHorario = $renovacionAutomaticaHorario;
        $this->fisioAsociado = $fisioAsociado;
        $this->entrenadorPersonal = $entrenadorPersonal;
        $this->mixtas = $mixtas;
        $this->socio = $socio;
    }

    /**
     * @return int
     */
    public function getNivelJuego(): int
    {
        return $this->nivelJuego;
    }

    /**
     * @param int $nivelJuego
     * @return Jugador
     */
    public function setNivelJuego(int $nivelJuego): Jugador
    {
        $this->nivelJuego = $nivelJuego;
        return $this;
    }

    /**
     * @return ManoPreferida
     */
    public function getManoHabil(): ManoPreferida
    {
        return $this->manoHabil;
    }

    /**
     * @param ManoPreferida $manoHabil
     * @return Jugador
     */
    public function setManoHabil(ManoPreferida $manoHabil): Jugador
    {
        $this->manoHabil = $manoHabil;
        return $this;
    }

    /**
     * @return LadoPreferido
     */
    public function getLadoPreferido(): LadoPreferido
    {
        return $this->ladoPreferido;
    }

    /**
     * @param LadoPreferido $ladoPreferido
     * @return Jugador
     */
    public function setLadoPreferido(LadoPreferido $ladoPreferido): Jugador
    {
        $this->ladoPreferido = $ladoPreferido;
        return $this;
    }

    /**
     * @return int
     */
    public function getIndiceDeIrresponibilidad(): int
    {
        return $this->indiceDeIrresponibilidad;
    }

    /**
     * @param int $indiceDeIrresponibilidad
     * @return Jugador
     */
    public function setIndiceDeIrresponibilidad(int $indiceDeIrresponibilidad): Jugador
    {
        $this->indiceDeIrresponibilidad = $indiceDeIrresponibilidad;
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
     * @return Jugador
     */
    public function setNumFederacion(int $numFederacion): Jugador
    {
        $this->numFederacion = $numFederacion;
        return $this;
    }

    /**
     * @return HorarioMensual
     */
    public function getHorarioMensualPreferido(): HorarioMensual
    {
        return $this->horarioMensualPreferido;
    }

    /**
     * @param HorarioMensual $horarioMensualPreferido
     * @return Jugador
     */
    public function setHorarioMensualPreferido(HorarioMensual $horarioMensualPreferido): Jugador
    {
        $this->horarioMensualPreferido = $horarioMensualPreferido;
        return $this;
    }

    /**
     * @return bool
     */
    public function isRenovacionAutomaticaHorario(): bool
    {
        return $this->renovacionAutomaticaHorario;
    }

    /**
     * @param bool $renovacionAutomaticaHorario
     * @return Jugador
     */
    public function setRenovacionAutomaticaHorario(bool $renovacionAutomaticaHorario): Jugador
    {
        $this->renovacionAutomaticaHorario = $renovacionAutomaticaHorario;
        return $this;
    }

    /**
     * @return Fisioterapia
     */
    public function getFisioAsociado(): Fisioterapia
    {
        return $this->fisioAsociado;
    }

    /**
     * @param Fisioterapia $fisioAsociado
     * @return Jugador
     */
    public function setFisioAsociado(Fisioterapia $fisioAsociado): Jugador
    {
        $this->fisioAsociado = $fisioAsociado;
        return $this;
    }

    /**
     * @return Entrenador
     */
    public function getEntrenadorPersonal(): Entrenador
    {
        return $this->entrenadorPersonal;
    }

    /**
     * @param Entrenador $entrenadorPersonal
     * @return Jugador
     */
    public function setEntrenadorPersonal(Entrenador $entrenadorPersonal): Jugador
    {
        $this->entrenadorPersonal = $entrenadorPersonal;
        return $this;
    }

    /**
     * @return bool
     */
    public function isMixtas(): bool
    {
        return $this->mixtas;
    }

    /**
     * @param bool $mixtas
     * @return Jugador
     */
    public function setMixtas(bool $mixtas): Jugador
    {
        $this->mixtas = $mixtas;
        return $this;
    }

    /**
     * @return int
     */
    public function getSocio(): int
    {
        return $this->socio;
    }

    /**
     * @param int $socio
     * @return Jugador
     */
    public function setSocio(int $socio): Jugador
    {
        $this->socio = $socio;
        return $this;
    }

    /**
     * @param $nivelJuego
     * @param $manoHabil
     * @param $ladoPreferido
     * @param $indiceDeIrresponibilidad
     * @param $numFederacion
     * @param $horarioMensualPreferido
     * @param $renovacionAutomaticaHorario
     * @param $fisioAsociado
     * @param $entrenadorPersonal
     * @param $mixtas
     * @param $socio
     */



}