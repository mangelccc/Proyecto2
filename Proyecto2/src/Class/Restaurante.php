<?php

namespace Class;

use Class\Cliente;

class Restaurante extends Cliente
{
    private int $mesas;
    private string $menu;
    private int $mesasDisponibles;
    private int $precioMenu;
    function comprobarDisponibilidad(): bool
    {
        // TODO: Implement comprobarDisponibilidad() method.
        return false;
    }

    public function getMesas(): int
    {
        return $this->mesas;
    }

    public function setMesas(int $mesas): Restaurante
    {
        $this->mesas = $mesas;
        return $this;
    }

    public function getMenu(): string
    {
        return $this->menu;
    }

    public function setMenu(string $menu): Restaurante
    {
        $this->menu = $menu;
        return $this;
    }

    public function getMesasDisponibles(): int
    {
        return $this->mesasDisponibles;
    }

    public function setMesasDisponibles(int $mesasDisponibles): Restaurante
    {
        $this->mesasDisponibles = $mesasDisponibles;
        return $this;
    }

    public function getPrecioMenu(): int
    {
        return $this->precioMenu;
    }

    public function setPrecioMenu(int $precioMenu): Restaurante
    {
        $this->precioMenu = $precioMenu;
        return $this;
    }


}