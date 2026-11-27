<?php

namespace App\Http\Controllers;

use App\Models\Producto as ProductoModel;
use Illuminate\Http\Request;

// use App\Models\Producto as ProductoModel;

class Producto extends Controller
{
    //

    public function listar(Request $req)
    {
        $page = $req->query('page');
        $limit = $req->query('limit');
        $filter = $req->query('filter');

        $listaProducto = ProductoModel::all();

        return response()->json($listaProducto, 200);
    }

    public function mostrar(Request $req)
    {
        $idProducto = $req->route('id');

        $producto = ProductoModel::find($idProducto);

        return response()->json($producto, 200);
    }

    public function crear(Request $req)
    {
        $nombre = $req->json('nombre');
        $precio = $req->json('precio');

        $productoRequest = $req->json()->all();

        $producto = ProductoModel::create($productoRequest);

        return response()->json($producto, 201);
    }

    public function actualizar(Request $req)
    {
        $idProducto = $req->route('id');

        $body = $req->json()->all();

        $producto = ProductoModel::where('id', $idProducto)
            ->update($body);

        return response()->json($producto, 200);
    }

    public function cambiarEstado(Request $req)
    {
        $idProducto = $req->route('id');

        $activo = $req->json('activo');

        $producto = ProductoModel::where('id', $idProducto)
            ->update([
                'activo' => $activo,
            ]);

        return response()->json($producto, 200);
    }

    public function eliminar(Request $req)
    {

        $idProducto = $req->route('id');

        ProductoModel::destroy($idProducto);

        return response()->json([], 200);
    }
}
