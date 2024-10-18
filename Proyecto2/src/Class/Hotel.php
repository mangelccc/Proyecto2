<?php

namespace Class;

use Class\Cliente;

class Hotel extends Cliente
{
    private int $habitaciones;
    public array $servicios;
    public int $categorias;
    private  int $habitacionesDisponibles;
    private float $precio;

    public function __construct(string $uuid)
    {
        parent::__construct($uuid);
        $this->servicios = array();
    }

    function comprobarDisponibilidad(): bool
    {
        // TODO: Implement comprobarDisponibilidad() method.
        return false;
    }

    public function getHabitaciones(): int
    {
        return $this->habitaciones;
    }

    public function setHabitaciones(int $habitaciones): Hotel
    {
        $this->habitaciones = $habitaciones;
        return $this;
    }

    public function getServicios(): array
    {
        return $this->servicios;
    }

    public function setServicios(array $servicios): Hotel
    {
        $this->servicios = $servicios;
        return $this;
    }

    public function getCategorias(): int
    {
        return $this->categorias;
    }

    public function setCategorias(int $categorias): Hotel
    {
        $this->categorias = $categorias;
        return $this;
    }

    public function getHabitacionesDisponibles(): int
    {
        return $this->habitacionesDisponibles;
    }

    public function setHabitacionesDisponibles(int $habitacionesDisponibles): Hotel
    {
        $this->habitacionesDisponibles = $habitacionesDisponibles;
        return $this;
    }

    public function getPrecio(): float
    {
        return $this->precio;
    }

    public function setPrecio(float $precio): Hotel
    {
        $this->precio = $precio;
        return $this;
    }


}