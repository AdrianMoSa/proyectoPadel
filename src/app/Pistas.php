<?php

namespace App;

class Pistas
{
private $idPista;
private $precio;
private $luz;
private $precioLuz;
private $tipoPista;
private $cubierta;
private $disponible;
private $reservaPistasMensuales;

    /**
     * @param $idPista
     * @param $precio
     * @param $luz
     * @param $precioLuz
     * @param $tipoPista
     * @param $cubierta
     * @param $disponible
     * @param $reservaPistasMensuales
     */
    public function __construct(int $idPista, float $precio, bool $luz, float $precioLuz, $tipoPista, bool $cubierta, bool $disponible, array $reservaPistasMensuales)
    {

        $this->idPista = $idPista;
        $this->precio = $precio;
        $this->luz = $luz;
        $this->precioLuz = $precioLuz;
        $this->tipoPista = $tipoPista;
        $this->cubierta = $cubierta;
        $this->disponible = $disponible;
        $this->reservaPistasMensuales = $reservaPistasMensuales;
    }

    /**
     * @return int
     */
    public function getIdPista(): int
    {
        return $this->idPista;
    }

    /**
     * @param int $idPista
     * @return Pistas
     */
    public function setIdPista(int $idPista): Pistas
    {
        $this->idPista = $idPista;
        return $this;
    }

    /**
     * @return float
     */
    public function getPrecio(): float
    {
        return $this->precio;
    }

    /**
     * @param float $precio
     * @return Pistas
     */
    public function setPrecio(float $precio): Pistas
    {
        $this->precio = $precio;
        return $this;
    }

    /**
     * @return bool
     */
    public function isLuz(): bool
    {
        return $this->luz;
    }

    /**
     * @param bool $luz
     * @return Pistas
     */
    public function setLuz(bool $luz): Pistas
    {
        $this->luz = $luz;
        return $this;
    }

    /**
     * @return float
     */
    public function getPrecioLuz(): float
    {
        return $this->precioLuz;
    }

    /**
     * @param float $precioLuz
     * @return Pistas
     */
    public function setPrecioLuz(float $precioLuz): Pistas
    {
        $this->precioLuz = $precioLuz;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getTipoPista()
    {
        return $this->tipoPista;
    }

    /**
     * @param mixed $tipoPista
     * @return Pistas
     */
    public function setTipoPista($tipoPista)
    {
        $this->tipoPista = $tipoPista;
        return $this;
    }

    /**
     * @return bool
     */
    public function isCubierta(): bool
    {
        return $this->cubierta;
    }

    /**
     * @param bool $cubierta
     * @return Pistas
     */
    public function setCubierta(bool $cubierta): Pistas
    {
        $this->cubierta = $cubierta;
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
     * @return Pistas
     */
    public function setDisponible(bool $disponible): Pistas
    {
        $this->disponible = $disponible;
        return $this;
    }

    /**
     * @return array
     */
    public function getReservaPistasMensuales(): array
    {
        return $this->reservaPistasMensuales;
    }

    /**
     * @param array $reservaPistasMensuales
     * @return Pistas
     */
    public function setReservaPistasMensuales(array $reservaPistasMensuales): Pistas
    {
        $this->reservaPistasMensuales = $reservaPistasMensuales;
        return $this;
    }


}