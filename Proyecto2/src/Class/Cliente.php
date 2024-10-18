<?php
include_once "./Usuario.php";
use Class\Usuario;

namespace Class;

abstract class Cliente
{
    private string $uuid;
    private Usuario $usuario;
    private string $nombre;
    private string $direccion;
    private array $telefonos;
    private bool $abierto;
    private float $coste;

    /**
     * @param string $uuid
     */
    public function __construct(string $uuid)
    {
        $this->uuid = $uuid;
        $this->telefonos = array();
        $this->abierto = false;
    }
    //setter y getter
    public function getUuid(): string
    {
        return $this->uuid;
    }

    public function setUuid(string $uuid): void
    {
        $this->uuid = $uuid;
        return $this;
    }

    public function getUsuario(): Usuario
    {
        return $this->usuario;
    }

    public function setUsuario(Usuario $usuario): Cliente
    {
        $this->usuario = $usuario;
        return $this;
    }

    public function getNombre(): string
    {
        return $this->nombre;
    }

    public function setNombre(string $nombre): Cliente
    {
        $this->nombre = $nombre;
        return $this;
    }

    public function getDireccion(): string
    {
        return $this->direccion;
    }

    public function setDireccion(string $direccion): Cliente
    {
        $this->direccion = $direccion;
        return $this;
    }

    public function getTelefonos(): array
    {
        return $this->telefonos;
    }

    public function setTelefonos(array $telefonos): Cliente
    {
        $this->telefonos = $telefonos;
        return $this;
    }

    public function isAbierto(): bool
    {
        return $this->abierto;
    }

    public function setAbierto(bool $abierto): Cliente
    {
        $this->abierto = $abierto;
        return $this;
    }

    public function getCoste(): float
    {
        return $this->coste;
    }

    public function setCoste(float $coste): Cliente
    {
        $this->coste = $coste;
        return $this;
    }

    //metodos
    abstract function comprobarDisponibilidad(): bool
    {

    }
}