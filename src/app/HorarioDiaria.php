<?php

namespace App;

class HorarioDiaria
{
private \DateTime$fecha;
private  float $horaApertura;
private float $horaCierre;
private int $duracionIntervalos;
private int  $intervalosDelDia;

    /**
     * @param $hora
     * @param $horaApertura
     * @param $horaCierre
     * @param $duracionIntervalos
     * @param $intervalosDelDia
     */
    public function __construct( $fecha, $horaApertura, $horaCierre,int $duracionIntervalos,array $intervalosDelDia)
    {
        $this->fecha = $fecha;
        $this->horaApertura = $horaApertura;
        $this->horaCierre = $horaCierre;
        $this->duracionIntervalos = $duracionIntervalos;
        $this->intervalosDelDia = $intervalosDelDia;
    }

    /**
     * @return mixed
     */
    public function getFecha()
    {
        return $this->fecha;
    }

    /**
     * @param mixed $fecha
     * @return HorarioDiaria
     */
    public function setFecha($fecha)
    {
        $this->fecha = $fecha;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getHoraApertura()
    {
        return $this->horaApertura;
    }

    /**
     * @param mixed $horaApertura
     * @return HorarioDiaria
     */
    public function setHoraApertura($horaApertura)
    {
        $this->horaApertura = $horaApertura;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getHoraCierre()
    {
        return $this->horaCierre;
    }

    /**
     * @param mixed $horaCierre
     * @return HorarioDiaria
     */
    public function setHoraCierre($horaCierre)
    {
        $this->horaCierre = $horaCierre;
        return $this;
    }

    /**
     * @return int
     */
    public function getDuracionIntervalos(): int
    {
        return $this->duracionIntervalos;
    }

    /**
     * @param int $duracionIntervalos
     * @return HorarioDiaria
     */
    public function setDuracionIntervalos(int $duracionIntervalos): HorarioDiaria
    {
        $this->duracionIntervalos = $duracionIntervalos;
        return $this;
    }

    /**
     * @return array
     */
    public function getIntervalosDelDia(): array
    {
        return $this->intervalosDelDia;
    }

    /**
     * @param array $intervalosDelDia
     * @return HorarioDiaria
     */
    public function setIntervalosDelDia(array $intervalosDelDia): HorarioDiaria
    {
        $this->intervalosDelDia = $intervalosDelDia;
        return $this;
    }


}