<?php

namespace Class;

class Telefono
{
    private string $telefono;
    private string $prefijo;

    /**
     * @param string $telefono
     * @param string $prefijo
     */
    public function __construct(string $telefono, string $prefijo)
    {
        $this->telefono = $telefono;
        $this->prefijo = $prefijo;
    }

    public function getTelefono(): string
    {
        return $this->telefono;
    }

    public function setTelefono(string $telefono): Telefono
    {
        $this->telefono = $telefono;
        return $this;
    }

    public function getPrefijo(): string
    {
        return $this->prefijo;
    }

    public function setPrefijo(string $prefijo): Telefono
    {
        $this->prefijo = $prefijo;
        return $this;
    }


}