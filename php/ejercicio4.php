<?php

// isset() Devuelve true cuando la variable existe y su valor es diferente de null.
// empty() Devuelve true cuando la variable no existe o contiene un valor considerado vacío, como "", 0, "0", 0.0, [], false o null.
// array_key_exists() Devuelve true cuando la clave indicada existe en un array, incluso si su valor es null.
// ?? Devuelve el valor de la izquierda si existe y es diferente de null; de lo contrario, devuelve el valor de la derecha.

// Usuario demo
$usuario = [
  'nombre' => 'Ximena',
  'edad' => 0,
  'activo' => false,
  'telefono' => null
];

// isset
var_dump('=========ISSET');
var_dump(isset($usuario['nombre']));
var_dump(isset($usuario['telefono']));
var_dump(isset($usuario['direccion']));
var_dump(isset($persona));
var_dump(isset($usuario['activo']));

// empty
var_dump('=========EMPTY');
var_dump(empty($usuario['nombre']));
var_dump(empty($usuario['edad']));
var_dump(empty($usuario['activo']));

// ARRAY KEY EXIST
var_dump('=========ARRAY KEY EXIST');
var_dump(array_key_exists('activo', $usuario));
var_dump(array_key_exists('direccion', $usuario));


// ??
$edad = $algo ?? 900;
// $edad = $usuario['edad'] ?? 90;
// $edad = $usuario['telefono'] ?? 90;


var_dump($edad);


$usuarios = [
    "count" => 8,
    "page" => 1,
    "show" => 8,

    "rows" => [
        [
            "id" => 1,
            "user" => "ivan@demo.com",
            "password" => "Ivan123!",
            "is_active" => true,
            "email_verified" => true,
            "person" => [
                "name" => "Ivan",
                "age" => 30,
            ],
        ],
        [
            "id" => 2,
            "user" => "carla@demo.com",
            "password" => "Carla123!",
            "is_active" => false,
            "email_verified" => true,
            "person" => [
                "name" => "Carla",
                "age" => 23,
            ],
        ],
        [
            "id" => 3,
            "user" => "juan@demo.com",
            "password" => "Juan123!",
            "is_active" => true,
            "email_verified" => false,
            "person" => [
                "name" => "Juan",
                "age" => 35,
            ],
        ],
        [
            "id" => 4,
            "user" => "lucia@demo.com",
            "password" => "1234",
            "is_active" => true,
            "email_verified" => true,
            "person" => [
                "name" => "Lucia",
                "age" => 27,
            ],
        ],
        [
            "id" => 5,
            "user" => "pedro@demo.com",
            "password" => null,
            "is_active" => true,
            "email_verified" => true,
            "person" => [
                "name" => "Pedro",
                "age" => 40,
            ],
        ],
        [
            "id" => 6,
            "user" => "ana@demo.com",
            // No tiene la clave password.
            "is_active" => true,
            "email_verified" => true,
            "person" => [
                "name" => "Ana",
                "age" => 22,
            ],
        ],
        [
            "id" => 7,
            "user" => "sofia@demo.com",
            "password" => "Sofia123!",
            // No tiene la clave is_active.
            "email_verified" => true,
            "person" => [
                "name" => "Sofia",
                "age" => 29,
            ],
        ],
        [
            "id" => 8,
            "user" => "miguel@demo.com",
            "password" => "Miguel123!",
            "is_active" => true,
            // No tiene la clave email_verified.
            "person" => [
                "name" => "Miguel",
                "age" => 33,
            ],
        ],
    ],
];


// Crear una funcion para el login de un usuario
// Consideraciones:
//  - El usuario puede ingresar su usuario con espacios extra ej: 'miguel@demo.com  ', por lo que se debe limpiar antes de comparar.
//  - El usuario debe estar activo.
//  - Se debe validar que se envian los valores requeridos (user, password).
//  - El password debe tener mas de 6 caracteres.
//  - En caso de login correcto debe devolver la siguiente estructura
    //   success -> true,
    //   message -> Un mensaje de bienvenida,
    //   data -> datos publicos como el user y nombre de la persona
//  -  En el caso de error o login incorrecto debe devolver
    //   success -> false,
    //   message -> el error que se tiene, por ejemplo falta usuario, o no coincide user y password,
    //   data -> null


function respuesaExito($message, $data) {
  return [
        'success' => true,
        'message' => $message,
        'data' => $data
      ];
}

function login($usuarios, $user, $password) {

  $usuarioLogin = [];

  foreach($usuarios['rows'] as $usuario) {
    if ($usuario['user'] === $user && $usuario['password'] === $password && $usuario['is_active']) {
      $usuarioLogin = [
        'success' => true,
        'message' => 'Usuario autenticado correctamente',
        'data' => [
          'email' => $usuario['user'],
          'name' => $usuario['person']['name']
        ]
      ];
    }
  }

  return $usuarioLogin;
}