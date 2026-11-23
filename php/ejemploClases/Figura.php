<?php

abstract class Figura
{
    protected string $color;

    public function __construct(string $color)
    {
        $this->color = $color;
    }

    // Cada clase hija debe implementar su propio cálculo.
    abstract public function calcularArea(): float;

    // Código compartido, disponible dentro de la clase y sus hijas.
    protected function redondear(float $valor): float
    {
        return round($valor, 2);
    }

    // Método público que utiliza el cálculo de la clase hija.
    public function obtenerDescripcion(): string
    {
        return "Color: {$this->color}. Área: {$this->calcularArea()}";
    }

    // Se puede llamar sin crear un objeto.
    public static function informacion(): string
    {
        return 'Cada figura calcula su área de forma diferente.';
    }
}