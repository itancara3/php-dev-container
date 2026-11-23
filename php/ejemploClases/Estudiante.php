<?php

// include
// require

// include_once
// require_once

require_once __DIR__.'/Persona.php';

class Estudiante extends Persona
{
    private string $curso;

    public function __construct(string $nombre, string $curso)
    {
        // Ejecuta el constructor de Persona.
        parent::__construct($nombre);

        $this->curso = $curso;
    }

    public function presentarse(): string
    {
        return "Soy {$this->nombre} y estudio {$this->curso}.";
    }
}