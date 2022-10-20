<?php

namespace App;

class HorarioMensual
{
protected \DateTime $fecha;
protected float $horaApertura;
protected float $horaCierre;
protected int $duraccionIntervalos;
protected int $intervalosDelDia;

    /**
     * @param $fecha
     * @param $horaApertura
     * @param $horaCierre
     * @param $duraccionIntervalos
     * @param $intervalosDelDia
     */
    public function __construct($fecha, $horaApertura, $horaCierre, $duraccionIntervalos, $intervalosDelDia)
    {
        $this->fecha = $fecha;
        $this->horaApertura = $horaApertura;
        $this->horaCierre = $horaCierre;
        $this->duraccionIntervalos = $duraccionIntervalos;
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
     * @return HorarioMensual
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
     * @return HorarioMensual
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
     * @return HorarioMensual
     */
    public function setHoraCierre($horaCierre)
    {
        $this->horaCierre = $horaCierre;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getDuraccionIntervalos()
    {
        return $this->duraccionIntervalos;
    }

    /**
     * @param mixed $duraccionIntervalos
     * @return HorarioMensual
     */
    public function setDuraccionIntervalos($duraccionIntervalos)
    {
        $this->duraccionIntervalos = $duraccionIntervalos;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getIntervalosDelDia()
    {
        return $this->intervalosDelDia;
    }

    /**
     * @param mixed $intervalosDelDia
     * @return HorarioMensual
     */
    public function setIntervalosDelDia($intervalosDelDia)
    {
        $this->intervalosDelDia = $intervalosDelDia;
        return $this;
    }


}