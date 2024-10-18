<?php
include_once "./Class/Usuario.php";
include_once "./Class/Enum/TipoUsuario.php";
include_once "./Class/Telefono.php";
use Class\Usuario;
use Class\Enum\TipoUsuario;
use Class\Telefono;

echo "Hola capullo.";
echo "<br>";

$usuario = new Usuario();

$arrayReservas = $usuario->getReservas();
$arrayReservas[] = "Hola array reservas.";

$usuario->setReservas($arrayReservas);

$usuario->reservas[]="Adiós array reservas.";


print_r( $usuario->reservas);
echo "<br>";

$usuario -> setUsername("charlie")
    -> setNombre("Carlos")
    -> setApellidos("González Martínez")
    -> setDni("12345678A");

$usuario->setTipo(TipoUsuario::ADMIN);

$telefono = new Telefono("+34", "687569458");

$usuario -> telefonos[]=$telefono;
print_r( $usuario->telefonos);
echo "<br>";