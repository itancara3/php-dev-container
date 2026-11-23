<?php

require_once __DIR__.'/Figura.php';

class Rectangulo extends Figura
{
    private float $base;
    private float $altura;

    public function __construct(string $color, float $base, float $altura)
    {
        parent::__construct($color);

        $this->base = $base;
        $this->altura = $altura;
    }

    public function calcularArea(): float
    {
        return $this->redondear($this->base * $this->altura);
    }
}


$rectanguloUno = new Rectangulo('rojo', 5, 20);

$rectanguloUno->calcularArea();



class Conversor {
    public static function minutosASegundos(int $minutos): int {
        return $minutos * 60;
    }
}

var_dump(Conversor::minutosASegundos(3));



class Usuario {
    // 
    private Persona $persona;
    private string $usuario;
    private string $contrasena;
    // ...
}

// DTO
final class UsuarioDTO {
    public string $usuario;
    public string $contrasena;

    public function __construct(string $usuario, $contrasena) {
        $this->usuario = $usuario;
        $this->constrasena = $contrasena;
    }

    public function getUsuario(): string {
        return $this->usuario;
    }
}


function mostrarDatos(Vehiculo $v) {

}

$usuario = new Usuaario();

$datosUsuario = new UsuarioDTO('Carla', '12345678');

function mostrarDatosUsuario (UsuarioDTO $u) {

}














