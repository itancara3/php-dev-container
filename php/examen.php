
<?php

$users = [
    [
        'id' => 1,
        'name' => 'Carlos',
        'email' => 'carlos@empresa.com',
        'password' => '123456',
        'role' => 'general',
        'active' => true,
        'permissions' => []
    ],
    [
        'id' => 2,
        'name' => 'María',
        'email' => 'maria@empresa.com',
        'password' => '123456',
        'role' => 'manager',
        'active' => true,
        'permissions' => []
    ],
    [
        'id' => 3,
        'name' => 'Pedro',
        'email' => 'pedro@empresa.com',
        'password' => '123456',
        'role' => 'worker',
        'active' => true,
        'permissions' => ['orders.view']
    ],
    [
        'id' => 4,
        'name' => 'Ana',
        'email' => 'ana@empresa.com',
        'password' => '123456',
        'role' => 'worker',
        'active' => true,
        'permissions' => [
            'orders.view',
            'orders.view_amounts'
        ]
    ],
    [
        'id' => 5,
        'name' => 'Luis',
        'email' => 'luis@empresa.com',
        'password' => '123456',
        'role' => 'worker',
        'active' => true,
        'permissions' => []
    ],
    [
        'id' => 6,
        'name' => 'Sofía',
        'email' => 'sofia@empresa.com',
        'password' => '123456',
        'role' => 'manager',
        'active' => false,
        'permissions' => []
    ],
    [
        'id' => 7,
        'name' => 'Diego',
        'email' => 'diego@empresa.com',
        'password' => '123456',
        'role' => 'worker',
        'active' => true
    ],
    [
        'id' => 8,
        'name' => 'Elena',
        'email' => 'elena@empresa.com',
        'password' => '123456',
        'role' => 'worker',
        'active' => true,
        'permissions' => ['orders.view_amounts']
    ]
];

$orders = [
    [
        'id' => 101,
        'user_id' => 3,
        'status' => 'completed',
        'customer' => [
            'name' => 'Juan Pérez',
            'email' => 'juan@gmail.com'
        ],
        'items' => [
            [
                'product_id' => 1,
                'name' => 'Laptop',
                'quantity' => 2,
                'price' => 4500
            ],
            [
                'product_id' => 2,
                'name' => 'Mouse',
                'quantity' => 3,
                'price' => 80
            ]
        ],
        'discount' => 10,
        'shipping' => [
            'cost' => 50,
            'address' => 'La Paz'
        ],
        'payment' => [
            'method' => 'card',
            'paid' => true,
            'amount' => 8366
        ]
    ],
    [
        'id' => 102,
        'user_id' => 4,
        'status' => 'pending',
        'customer' => [
            'name' => 'Laura Gómez'
        ],
        'items' => [
            [
                'product_id' => 3,
                'name' => 'Teclado',
                'quantity' => 2,
                'price' => 150
            ],
            [
                'product_id' => 4,
                'name' => 'Monitor',
                'quantity' => 1
            ]
        ],
        'discount' => 5,
        'shipping' => [
            'cost' => 30
        ],
        'payment' => [
            'method' => 'cash',
            'paid' => false
        ]
    ],
    [
        'id' => 103,
        'user_id' => 5,
        'status' => 'completed',
        'customer' => [
            'name' => 'Roberto Díaz',
            'email' => ''
        ],
        'items' => [
            [
                'product_id' => 5,
                'name' => 'Impresora',
                'quantity' => 0,
                'price' => 1200
            ],
            [
                'product_id' => 6,
                'name' => 'Cable USB',
                'quantity' => 4,
                'price' => 25
            ]
        ],
        'discount' => null,
        'shipping' => [],
        'payment' => [
            'method' => 'transfer',
            'paid' => true,
            'amount' => 100
        ]
    ],
    [
        'id' => 104,
        'user_id' => 3,
        'status' => 'pending',
        'customer' => [
            'name' => 'Andrea Flores',
            'email' => 'andrea@gmail.com'
        ],
        'items' => [],
        'discount' => 0,
        'shipping' => [
            'cost' => 20,
            'address' => 'El Alto'
        ]
    ],
    [
        'id' => 105,
        'user_id' => 4,
        'status' => 'completed',
        'customer' => [
            'name' => 'Miguel Torres',
            'email' => 'miguel@gmail.com'
        ],
        'items' => [
            [
                'product_id' => 7,
                'name' => 'Disco SSD',
                'quantity' => 2,
                'price' => 400
            ],
            [
                'product_id' => 8,
                'name' => 'Memoria RAM',
                'quantity' => 3,
                'price' => 250
            ]
        ],
        'discount' => 15,
        'shipping' => [
            'cost' => 0,
            'address' => 'Cochabamba'
        ],
        'payment' => [
            'method' => 'card',
            'paid' => true,
            'amount' => 1317.50
        ]
    ],
    [
        'id' => 106,
        'user_id' => 7,
        'status' => 'cancelled',
        'customer' => [
            'name' => 'Patricia Rojas',
            'email' => 'patricia@gmail.com'
        ],
        'items' => [
            [
                'product_id' => 9,
                'name' => 'Audífonos',
                'quantity' => -2,
                'price' => 200
            ],
            [
                'product_id' => 10,
                'name' => 'Webcam',
                'quantity' => 1,
                'price' => -100
            ]
        ],
        'discount' => 120,
        'shipping' => [
            'cost' => -15,
            'address' => ''
        ],
        'payment' => [
            'method' => 'cash',
            'paid' => false,
            'amount' => 0
        ]
    ],
    [
        'id' => 107,
        'user_id' => 3,
        'status' => 'completed',
        'customer' => [
            'name' => 'Fernanda López',
            'email' => 'fernanda@gmail.com'
        ],
        'items' => [
            [
                'product_id' => 11,
                'name' => 'Tablet',
                'quantity' => 1,
                'price' => 1800
            ],
            [
                'product_id' => 12,
                'name' => 'Funda',
                'quantity' => 2,
                'price' => 75
            ]
        ],
        'discount' => 0,
        'shipping' => [
            'cost' => 40,
            'address' => 'Santa Cruz'
        ],
        'payment' => [
            'method' => 'transfer',
            'paid' => true,
            'amount' => 1900
        ]
    ],
    [
        'id' => 108,
        'user_id' => 8,
        'status' => 'pending',
        'customer' => [
            'name' => '',
            'email' => null
        ],
        'items' => [
            [
                'product_id' => 13,
                'name' => 'Router',
                'quantity' => 2,
                'price' => 350
            ]
        ],
        'payment' => [
            'method' => 'cash',
            'paid' => false,
            'amount' => 0
        ]
    ]
];


// EXAMEN
/*
1. Realizar el login de usuario, mediande email y password simulando un inicio de sesion en el sistema.

Los siguientes ejercicios solo los puede ver un usuario ron role general o manager o un worker con el permiso especial (orders.view)

2. Crear una funcion para buscar un order por su ID y estado 
3. Listar los orders que esten pendientes y hayan sido pagados por transferencia.
4. Listar los orders con mas de 1 item.
5. Crear una funcion para listar los orders que user_id coincida con el usuario que inicio sesion.
6. Calcular el total de pedidos por grupos segun su estado tomando en cuenta el descuento, la qty del item y su precio.
   ejemplo:  total de pedidos en pendiente, en completed, cancelled y otros.
*/
