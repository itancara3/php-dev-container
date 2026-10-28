<?php

$resultado = [
    "current_page" => 1,
    "per_page" => 5,
    "total" => 5,
    "last_page" => 1,
    "from" => 1,
    "to" => 5,
    "data" => [
        [
            "id" => 1,
            "nombre" => "Ivan",
            "email" => "ivan@demo.com",
            "activo" => true,
            "pedidos" => [
                [
                    "id" => 101,
                    "fecha" => "2026-10-20",
                    "estado" => "pagado",
                    "total" => 129.90,
                    "detalles" => [
                        [
                            "id" => 1001,
                            "cantidad" => 2,
                            "precio_unitario" => 64.95,
                            "subtotal" => 129.90,
                            "producto" => [
                                "id" => 50,
                                "nombre" => "Mouse inalambrico",
                                "precio" => 64.95,
                                "stock" => 15,
                                "activo" => true,
                                "categoria" => [
                                    "id" => 10,
                                    "nombre" => "Perifericos",
                                    "departamento" => [
                                        "id" => 3,
                                        "nombre" => "Tecnologia",
                                        "activo" => true,
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
        ],
        [
            "id" => 2,
            "nombre" => "Carla",
            "email" => "carla@demo.com",
            "activo" => true,
            "pedidos" => [
                [
                    "id" => 102,
                    "fecha" => "2026-10-21",
                    "estado" => "pendiente",
                    "total" => 180.50,
                    "detalles" => [
                        [
                            "id" => 1002,
                            "cantidad" => 1,
                            "precio_unitario" => 180.50,
                            "subtotal" => 180.50,
                            "producto" => [
                                "id" => 51,
                                "nombre" => "Teclado mecanico",
                                "precio" => 180.50,
                                "stock" => 8,
                                "activo" => true,
                                "categoria" => [
                                    "id" => 10,
                                    "nombre" => "Perifericos",
                                    "departamento" => [
                                        "id" => 3,
                                        "nombre" => "Tecnologia",
                                        "activo" => true,
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
        ],
        [
            "id" => 3,
            "nombre" => "Juan",
            "email" => "juan@demo.com",
            "activo" => true,
            "pedidos" => [
                [
                    "id" => 103,
                    "fecha" => "2026-10-22",
                    "estado" => "enviado",
                    "total" => 1250.00,
                    "detalles" => [
                        [
                            "id" => 1003,
                            "cantidad" => 1,
                            "precio_unitario" => 1250.00,
                            "subtotal" => 1250.00,
                            "producto" => [
                                "id" => 52,
                                "nombre" => "Monitor de 24 pulgadas",
                                "precio" => 1250.00,
                                "stock" => 6,
                                "activo" => true,
                                "categoria" => [
                                    "id" => 11,
                                    "nombre" => "Pantallas",
                                    "departamento" => [
                                        "id" => 3,
                                        "nombre" => "Tecnologia",
                                        "activo" => true,
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
        ],
        [
            "id" => 4,
            "nombre" => "Lucia",
            "email" => "lucia@demo.com",
            "activo" => true,
            "pedidos" => [
                [
                    "id" => 104,
                    "fecha" => "2026-10-23",
                    "estado" => "entregado",
                    "total" => 287.70,
                    "detalles" => [
                        [
                            "id" => 1004,
                            "cantidad" => 3,
                            "precio_unitario" => 95.90,
                            "subtotal" => 287.70,
                            "producto" => [
                                "id" => 53,
                                "nombre" => "Audifonos con microfono",
                                "precio" => 95.90,
                                "stock" => 20,
                                "activo" => true,
                                "categoria" => [
                                    "id" => 12,
                                    "nombre" => "Audio",
                                    "departamento" => [
                                        "id" => 3,
                                        "nombre" => "Tecnologia",
                                        "activo" => true,
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
        ],
        [
            "id" => 5,
            "nombre" => "Pedro",
            "email" => "pedro@demo.com",
            "activo" => true,
            "pedidos" => [
                [
                    "id" => 105,
                    "fecha" => "2026-10-24",
                    "estado" => "pagado",
                    "total" => 91.00,
                    "detalles" => [
                        [
                            "id" => 1005,
                            "cantidad" => 2,
                            "precio_unitario" => 45.50,
                            "subtotal" => 91.00,
                            "producto" => [
                                "id" => 54,
                                "nombre" => "Memoria USB de 64 GB",
                                "precio" => 45.50,
                                "stock" => 30,
                                "activo" => true,
                                "categoria" => [
                                    "id" => 13,
                                    "nombre" => "Almacenamiento",
                                    "departamento" => [
                                        "id" => 3,
                                        "nombre" => "Tecnologia",
                                        "activo" => true,
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
        ],
    ],
];


foreach($resultado['data'] as $usuario) {
  foreach($usuario['pedidos'] as $pedido) {
    foreach($pedido['detalles'] as $detalle) {
      var_dump($detalle['producto']['categoria']['departamento']['nombre']);
    }
  }
}


// Listar el producto mas caro
// Listar el producto mas barato
// Listar los productos con stock menor estricto a 15
// Mostrar el total de los pedidos.
// Crear un buscador ignodando mayusculas y minusculas, para buscar un producto que contenga los terminos de la busqueda.
//  Ej: si busco usb debe encontrar productos como     "Memoria USB de 64 GB










