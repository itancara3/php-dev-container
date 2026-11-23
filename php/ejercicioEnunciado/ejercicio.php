<?php

// Un taller necesita registrar las órdenes de trabajo de sus clientes. Cada cliente puede tener varias órdenes y cada orden contiene una lista de servicios con sus respectivos precios. Las órdenes pueden estar pendientes, completadas o canceladas. Cada servicio aparece como máximo una vez en una orden y puede utilizarse en distintas órdenes. El taller considera facturadas únicamente las órdenes completadas.

// Elabora el diagrama de clases identificando los atributos, métodos y relaciones necesarios. Representa la visibilidad de los miembros y las cantidades de las relaciones.


class Servicio {
    public int $id;
    public string $nombre;
    public float $precio;

    public function __construct(int $id, string $nombre, float $precio) {
        $this->id = $id;
        $this->nombre = $nombre;
        $this->precio = $precio;
    }
}

class OrdenTrabajo {
    public int $id;
    private array $servicios = [];
    public string $estado;

    public function __construct(int $id, string $estado) {
        $this->id = $id;
        $this->estado = $estado;
    }

    public function agregarServicio(Servicio $servicio): void {
        $this->servicios[] = $servicio;
    }

    public function obtenerServicios() {
        return $this->servicios;
    }

    // 1. Calcular totales
    public function calcularTotal() {
        $total = 0;

        foreach ($this->servicios as $servicio) {
            $total = $total + $servicio->precio;
        }

        return $total;
    }
}

class Cliente {
    public int $id;
    public string $nombre;
    private array $ordenes = [];

    public function __construct(int $id, string $nombre) {
        $this->id = $id;
        $this->nombre = $nombre;
    }

    public function agregarOrder(OrdenTrabajo $orden) {
        $this->ordenes[] = $orden;
    }

    public function totalOrdenesFacuradas() {
        $total = 0;

        foreach ($this->ordenes as $orden) {
            if ($orden->estado === 'completado') {
                $total = $total + $orden->calcularTotal();  
            }
        }

        return [
            'cliente' => $this->nombre,
            'totalFacturado' => $total
        ];
    }
}

