<?php

class Person {
    private string $nombre;
    private string $apellidoPaterno;
    private string $apellidoMaterno;
    private string $fechaNacimiento;

    public function __construct($nombre, $apellidoPaterno, $apellidoMaterno) {
        $this->nombre = $nombre;
        $this->apellidoPaterno = $apellidoPaterno;
        $this->apellidoMaterno = $apellidoMaterno;
    }

    public function getName() {
        return $this->nombre;
    }

    public function setName($newName) {
        $this->nombre = $newName;
    }

    public function getFullName() {
        return $this->nombre." ".$this->apellidoPaterno." ".$this->apellidoMaterno;
    }
}

$person = new Person('Margo', 'Caba', 'Siegle');

// $person1 = new Person();

// var_dump($person->getName());

$person->setName('Margo');

// var_dump($person->getFullName());


class Auto {
    private string $color;
    private int $kilometraje;
    private string $tipo;
    private string $marca;
    private string $modelo;
    private int $nroAsientos;
    private int $nroPuertas;


    public function __construct($color, $tipo, $marca, $modelo, $nroAsientos, $nroPuertas) {
        $this->color = $color;
        $this->kilometraje = 0;
        $this->tipo = $tipo;
        $this->marca = $marca;
        $this->modelo = $modelo;
        $this->nroAsientos = $nroAsientos;
        $this->nroPuertas = $nroPuertas ?? 5;
    }

    public function getNumeroPuertas() {
        return $this->nroPuertas;
    }

}

$autoNuevo = new Auto('Grafito', 'Camioneta', 'Mitsubishi', '2026', 7, null);

// var_dump($autoNuevo);







class Animal {
    public string $nombre;

    public function __construct($nombre) {
        $this->nombre = $nombre;
    }

    public function comer() {
        return $this->nombre.' esta comiendo';
    }

}

class Perro extends Animal {

    public function ladrar() {
        return $this->nombre.' dice guau guau';
    }
}

class Gato extends Animal {

    public function maullar() {
        return $this->nombre.' dice miau miau';
    }
}

$perrito = new Perro('Kiba');
$gatito = new Gato('Avena');

var_dump($perrito->ladrar());

var_dump($gatito->maullar());


// Composicion

class Motor {
    private int $nroBujias;

    public function __construct($nroBujias) {
        $this->nroBujias = $nroBujias;
    }


    public function encender () {
        return 'Motor encendido';
    }
}


class Automovil {
    private Motor $motor;

    public function __construct($nroBujias) {
        $this->motor = new Motor($nroBujias);
    }

    public function arrancar() {
        return $this->motor->encender();
    }
}

$auto = new Automovil();

var_dump($auto->arrancar());


// Agregacion
class Jugador {
    private string $nombre;

    public function __construct ($nombre) {
        $this->nombre = $nombre;
    }

    public function getNombre () {
        return $this->nombre;
    }
}

class Equipo {
    private array $jugadores = [];

    public function __construct() {

    }

    public function agregarJugador () {
        $jugador = new Jugador('Ana');

        $this->jugadores[] = $jugador;
    }

    public function listarJugadores () {
        $nombres = [];

        foreach ($this->jugadores as $jugador) {
            $nombres[] = $jugador->getNombre();
        }

        return $nombres;
    }
}


