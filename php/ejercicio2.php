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

var_dump($usuarios['count']);
















