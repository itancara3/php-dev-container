<?php


$usuarios = [
  "count" => 90,
  "page" => 1,
  "show" => 3,
  "rows" => [
    [
      "user" => "ivan@demo.com",
      "password" => "Password123!",
      "is_active" => true,
      "email_verified" => false,
      "person" => [
        "name" => "Ivan",
        "age" => 30,
      ]
    ],
    [
      "user" => "carla@demo.com",
      "password" => "Password123!",
      "is_active" => true,
      "email_verified" => false,
      "person" => [
        "name" => "Carla",
        "age" => 23,
      ]
    ],
    [
      "user" => "Juan@demo.com",
      "password" => "Password123!",
      "is_active" => true,
      "email_verified" => true,
      "person" => [
        "name" => "Juan",
        "age" => 35,
      ]
    ]
  ]
];

// Mostrar la persona mayor usando foreach y una funcion.

function mayorEdad($usuarios) {
  $edadMayor = 0;

  foreach($usuarios as $usuario) {
    $edadUsuario = $usuario['person']['age'];

    if ($edadUsuario > $edadMayor) {
      $edadMayor = $edadUsuario;
    }
  }

  foreach($usuarios as $usuario) {
    $edadUsuario = $usuario['person']['age'];
    
    if ($edadUsuario === $edadMayor) {
      var_dump($usuario['person']['name']);
    }
  }

}

mayorEdad($usuarios['rows']);












