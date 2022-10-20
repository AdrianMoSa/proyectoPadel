<?php

namespace App;

class Fisioterapia extends Empleado
{
    private Jugador $clienteVIP;


    public function __construct(string $nombre,string $apellidos,string $dni,string $direccion,string $cuentaCorriente, string $numeroSeguridadSocial, $clienteVIP )
    {
        parent::__construct($dni, $nombre, $apellidos, $direccion, $cuentaCorriente, $numeroSeguridadSocial);
        $clienteVIP->clienteVIP;
    }
}