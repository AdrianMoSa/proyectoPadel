<?php

namespace App;

class Persona
{
    private string $dni;
    private string $nombre;
    private string $apellidos;
    private string $telefono;

    public function __construct(String $dni, String $nombre, String $apellidos)
    {
        $this->dni=$dni;
        $this->nombre=$nombre;
        $this->apellidos=$apellidos;

    }
    public function setDNI(string $dni):Persona{
        $this->dni=$dni;
        return $this;
}
    public function getDNI():string{
        return $this->dni;
    }

    /**
     * @return String
     */
    public function getNombre(): string
    {
        return $this->nombre;
    }

    /**
     * @param String $nombre
     * @return Persona
     */
    public function setNombre(string $nombre): Persona
    {
        $this->nombre = $nombre;
        return $this;
    }

    /**
     * @return String
     */
    public function getApellidos(): string
    {
        return $this->apellidos;
    }

    /**
     * @param String $apellidos
     * @return Persona
     */
    public function setApellidos(string $apellidos): Persona
    {
        $this->apellidos = $apellidos;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getTelefono()
    {
        return $this->telefono;
    }

    /**
     * @param mixed $telefono
     * @return Persona
     */
    public function setTelefono($telefono): Persona
    {
        $this->telefono = $telefono;
        return $this;
    }

}