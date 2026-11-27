<?php

namespace Database\Seeders;

use App\Models\Producto;
use Illuminate\Database\Seeder;

class ProductoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $productos = [
            [
                'nombre' => 'Teclado',
                'descripcion' => 'Tecldo en español',
                'precio' => 150,
                'stock' => 10,
                'activo' => true,
            ],
            [
                'nombre' => 'Mouse',
                'descripcion' => 'Mouse inalambrico',
                'precio' => 85,
                'stock' => 39,
                'activo' => true,
            ],
        ];

        foreach ($productos as $producto) {
            Producto::create($producto);
        }
    }
}
