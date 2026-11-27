<?php

use App\Http\Controllers\Producto;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

// api/user
Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::get('/hello-world', function (Request $request) {
    $nombre = 'Carla';

    $respuesta = [
        'nombre' => $nombre,
    ];

    return response()->json($respuesta, 200);

    // return "Holas $nombre";
});

Route::post('/hola', function (Request $request) {
    $nombre = 'Carla';

    $respuesta = [
        'nombre' => $nombre,
    ];

    return response()->json($respuesta, 201);
});

// https://api.com?page=1&limit10.  // queries
// https://api.com/1                // parameters
Route::get('/productos', [Producto::class, 'listar']);
Route::get('/productos/{id}', [Producto::class, 'mostrar']);

Route::post('/productos', [Producto::class, 'crear']);
Route::put('/productos/{id}', [Producto::class, 'actualizar']);

Route::patch('/productos/{id}', [Producto::class, 'cambiarEstado']);

Route::delete('/productos/{id}', [Producto::class, 'eliminar']);

// Route::get('/productos/pedido/{idPedido}/cantidad/{idProducto}', [Producto::class, 'mostrar']);

// CRUD
// Categorias    id, nombre         // timestamps y softDelete
// Productos        YA EXISTE       // categoria_id
// Ordenes       id, fecha, estado. // timestamps y softDelete
// OrdenDetalle  id, orden_id, producto_id, cantidad, precio_unitario, // timestamps y softDelete
