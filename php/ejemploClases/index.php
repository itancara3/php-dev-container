<?php

require_once __DIR__.'/Estudiante.php';

$estudiante = new Estudiante('Carla', "Mecanica de fluidos");


var_dump($estudiante->presentarse());