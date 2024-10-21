<?php

namespace Class;

class Reservas
{
    private string $uuid;
    private Usuario $usuario;
    private Date $fecha;
    private int $unidades;
    private float $coste;
    private Cliente $cliente;
    private Enum $metodoPago;
    private int $numCambios;

    public function getUuid(): string
    {
        return $this->uuid;
    }

    public function setUuid(string $uuid): Reservas
    {
        $this->uuid = $uuid;
        return $this;
    }

    public function getUsuario(): Usuario
    {
        return $this->usuario;
    }

    public function setUsuario(Usuario $usuario): Reservas
    {
        $this->usuario = $usuario;
        return $this;
    }

    public function getFecha(): Date
    {
        return $this->fecha;
    }

    public function setFecha(Date $fecha): Reservas
    {
        $this->fecha = $fecha;
        return $this;
    }

    public function getUnidades(): int
    {
        return $this->unidades;
    }

    public function setUnidades(int $unidades): Reservas
    {
        $this->unidades = $unidades;
        return $this;
    }

    public function getCoste(): float
    {
        return $this->coste;
    }

    public function setCoste(float $coste): Reservas
    {
        $this->coste = $coste;
        return $this;
    }

    public function getCliente(): Cliente
    {
        return $this->cliente;
    }

    public function setCliente(Cliente $cliente): Reservas
    {
        $this->cliente = $cliente;
        return $this;
    }

    public function getMetodoPago(): Enum
    {
        return $this->metodoPago;
    }

    public function setMetodoPago(Enum $metodoPago): Reservas
    {
        $this->metodoPago = $metodoPago;
        return $this;
    }

    public function getNumCambios(): int
    {
        return $this->numCambios;
    }

    public function setNumCambios(int $numCambios): Reservas
    {
        $this->numCambios = $numCambios;
        return $this;
    }
}
