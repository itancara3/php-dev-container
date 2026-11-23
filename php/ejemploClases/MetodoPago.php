<?php

interface MetodoPago {
    public function pagar(float $importe): void;

    public function calcularMonto(): string;
}


class PagoEfectivo implements MetodoPago {

    public function pagar(float $importe) {
        echo "Cobrar Bs $importe en efectivo.";
    }
}

class PagoTarjeta implements MetodoPago {
    public function pagar(float $importe) {
        echo "Procesar Bs $importe con tarjeta.";
    }
}