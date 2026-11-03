<?php

$orders = [
    ['id' => 301, 'user_id' => 0, 'items' => ['Cuaderno', 'Lapiz']],
    ['id' => 302, 'user_id' => 2, 'items' => ['Mochila']],
    ['id' => 303, 'user_id' => 0, 'items' => []],
    ['id' => 304, 'user_id' => 0, 'items' => ['Regla', 'Borrador', 'Tajador']],
];

// Crear una funcion que devuelva el listado de ids de los orders por usuario.
// Crear una funcion que devuelva el listado de ids de los orders que tenga mas de X items.

function filtrarPorUsuario($orders, $idUsuario) {
  $orderByUser = [];  

  foreach ($orders as $order) {
    if ($order['user_id'] === $idUsuario) {
      $orderByUser[] = $order['id'];
    }
  }

  return $orderByUser;
}

$idUsuario = 2;

// var_dump(filtrarPorUsuario($orders, $idUsuario));


function filtrarOrders($orders, $cantidadItems) {
  $orderIds = [];

  foreach ($orders as $order) {
    if (count($order['items']) > $cantidadItems && !empty($order['items'])) {
      $orderIds[] = $order['id'];
    }
  }

  return $orderIds;
}

$cantItems = -123;

// var_dump(filtrarOrders($orders, $cantItems));


$orders = [
    [
        'id' => 401,
        'status' => 'pending',
        'payment' => ['method' => 'transfer', 'paid' => true],
    ],
    [
        'id' => 402,
        'status' => 'pending',
        'payment' => ['method' => 'transfer', 'paid' => false],
    ],
    [
        'id' => 403,
        'status' => 'completed',
        'payment' => ['method' => 'transfer', 'paid' => true],
    ],
    [
        'id' => 404,
        'status' => 'pending',
        'payment' => ['method' => 'trans', 'paid' => true],
    ],
    [
        'id' => 405,
        'status' => 'pending',
        'payment' => ['method' => 'transfer', 'paid' => true],
    ],
    [
        'id' => 406,
        'status' => 'pending',
    ],
];



// Crear una funcion que devuelva el listado de de ids de orders que status sea pending y payment method sea transfer y paid sea true.
// Crear una funcion que devuelva el listado de de ids de orders paid sea false.



function filtarPorCondicion($orders) {
  $status = 'pending';
  $paymentMethod = 'transfer';
  $ids = [];

  foreach($orders as $order) {
    if (isset($order['payment'])) {
      if ($order['status'] === $status && $order['payment']['method'] === $paymentMethod && $order['payment']['paid']) {
        $ids[] = $order['id'];
      }
    }
  }

  return $ids;
}

// var_dump(filtarPorCondicion($orders));




$orders = [
    [
        'id' => 501,
        'status' => 'completed',
        'discount' => 10,
        'items' => [
            ['quantity' => 2, 'price' => 1000],
        ],
    ],
    [
        'id' => 502,
        'status' => 'completed',
        'discount' => 25,
        'items' => [
            ['quantity' => 3, 'price' => 200],
        ],
    ],
    [
        'id' => 503,
        'status' => 'pending',
        'discount' => 0,
        'items' => [
            ['quantity' => 1, 'price' => 500],
        ],
    ],
    [
        'id' => 504,
        'status' => 'refunded',
        'discount' => null,
        'items' => [
            ['quantity' => 2, 'price' => 300],
        ],
    ],
];


// Crear una funcion que retorne el total de los orders por estado, considerar que discount es un porcentaje.
// Crear una funcion que retorne el total de los orders que tengan mas de x items, considerar que discount es un porcentaje.


function totalPorEstado($orders) {
  $estados = [];

  foreach ($orders as $order) {
    if (!in_array($order['status'], $estados)) {
      $estados[$order['status']] = 0;
    }
  }

  foreach ($estados as $key => $value) {
    foreach ($orders as $order) {
      if ($order['status'] === $key) {
        $discount = ($order['discount'] ?? 0)/100;

        $total = 0;

        foreach ($order['items'] as $item) {
          $total = $total + ($item['quantity'] * $item['price']);
        }

        $total = $total - ($total * $discount);

        $estados[$key] = $estados[$key] + $total;
      }
    }
  }

  return $estados;
}

var_dump(totalPorEstado($orders));





$camposEsperados = ['id', 'shipping', 'discount'];


$orders = [
    ['id' => 601, 'shipping' => ['cost' => 0], 'discount' => 0],
    ['id' => 602, 'shipping' => [], 'discount' => 10],
    ['id' => 603, 'shipping' => ['cost' => 20], 'discount' => null],
    ['id' => 604, 'discount' => 0],
    ['id' => 605, 'shipping' => ['cost' => 0], 'discount' => '0'],
    ['id' => 606, 'shipping' => ['cost' => 0]],
];

// crear una funcion para determinar que campos son faltantes, con la siguientes reglas.
  // Shipping ausente, null o array vacío cuenta como faltante.
  // Shipping con costo cero es válido.
  // Descuento ausente, null o string vacío cuenta como faltante.
  // Los descuentos 0 y "0" son válidos.
  // Devolver el ID y los campos faltantes. ejemplo (shipping)
  // Utilizar isset() y empty() donde corresponda.




$users = [
    [
        'id' => 0,
        'email' => 'general@empresa.com',
        'password' => 'AbC123',
        'role' => 'general',
        'active' => true,
    ],
    [
        'id' => 1,
        'email' => 'manager@empresa.com',
        'password' => 'AbC123',
        'role' => 'manager',
        'active' => false,
    ],
    [
        'id' => 2,
        'email' => 'worker@empresa.com',
        'password' => 'AbC123',
        'role' => 'worker',
        'active' => true,
        'permissions' => ['orders.view'],
    ],
    [
        'id' => 3,
        'email' => 'amounts@empresa.com',
        'password' => 'AbC123',
        'role' => 'worker',
        'active' => true,
        'permissions' => ['orders.view_amounts'],
    ],
    [
        'id' => 4,
        'email' => 'sinpermiso@empresa.com',
        'password' => 'AbC123',
        'role' => 'worker',
        'active' => true,
    ],
];

// Crear 2 funciones, una para realizar login y otra para verificar si tiene acceso, bajo las siguientes condiciones.
  // General y manager tienen acceso
  // Worker + permisos orders.view tiene acceso