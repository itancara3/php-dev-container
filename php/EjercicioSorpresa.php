<?php


// $variable = 'string';

// $entero = 12;

// $float = 12.2;

// $condition = true;

// $objeto = [1, 'triu', true, [ 'nombre' => 'ivan']];

// $asoc = [
//   'nombre' => 'Margo',
//   'edad' => 25
// ];

// // Funciones comunes
// // echo ('Buenas tardes Ayana');

// // print_r ($objeto);

// // var_dump($objeto);

// // Operadores

// function sumar($a, $b) {
//   return $a + $b;
// }


// // Operador 
// // && || !
// // p && q    =   !(p && q)   = !p || !q
// // p || q    =   !(p || q)   = !p && !q

// // (p && q) || ((w || r) && n)

// var_dump(!$condition);


// // Condicionales
// if ($condition || $condition) {

// } 
// // else {

// // }
// // < > <= >=
// // 

// $a = 2;
// $b = '2';

// // if ($a == $b) {
// //   # code...
// // }

// if ($a === $b) {
//   # code...
// }

// // if ($a != $b) {
// //   # code...
// // }

// if ($a !== $b) {
//   # code...
// }

// $result = ($salario > 100000) ? 'Despedido' : 'Contratado';

// // Iteradores

// for($i = 0; $i < 100; $i = $i + 2 ) {

// }

// foreach ($array as $key => $value) {
// }

// while ($count < 90) {
//   $count++;
// }

// // is_int
// // is_float
// // is_string
// // is_bool
// is_int($a);

// // isset() Devuelve true cuando la variable existe y su valor es diferente de null.
// // empty() Devuelve true cuando la variable no existe o contiene un valor considerado vacío, como "", 0, "0", 0.0, [], false o null.
// // array_key_exists() Devuelve true cuando la clave indicada existe en un array, incluso si su valor es null.
// // ?? Devuelve el valor de la izquierda si existe y es diferente de null; de lo contrario, devuelve el valor de la derecha.

// $a = 2;
// $lista = [];

// $asoc = [
//   'nombre' => 'Margo',
//   'edad' => 25
// ];

// $variable = $c ?? 0;

// if (isset($c)) {
//   # code...
// }

// if (!empty($lista)) {
//   # code...
// }

// if (array_key_exists('nombre', $asoc)) {
//   # code...
// }







// SLICE de mas argumentos de los que acepta el array


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


// var_dump($usuarios['rows']);

// foreach ($usuarios['rows'] as $usuario) {
//   var_dump($usuario['person']['name']);
// }

// foreach ($usuarios['rows'] as $usuario) {
//   if ($usuario['email_verified']) {
//     var_dump($usuario['person']['name']);
//   }
// }

// $primerUsuarioActivo = null;

// foreach ($usuarios as $user) {
//     if ($user['is_active']) {
//         $primerUsuarioActivo = $user;

//         break;
//     }
// }

// return $primerUsuarioActivo;

// Callbacks
// Map
$nombres = array_map(function ($user) {
    return $user['person']['name'];
}, $usuarios['rows']);

$nombres = array_map(fn ($user) => $user['person']['name'], $usuarios['rows']);

// var_dump($nombres);

// FIND
$correo = 'carla@demo.com';

$usuario = array_find($usuarios['rows'], function ($user, $index) use ($correo) {
    return $user['user'] === $correo;
});

// var_dump($usuario);

// REDUCE

$totalEdad = array_reduce(
    $usuarios['rows'],
    function ($suma, $user) {
        return $suma + $user['person']['age'];
    },
    0
);

// var_dump($totalEdad);

// FILTER
 
$verified = array_filter(
    $usuarios['rows'],
    function ($user) {
        return $user['email_verified'];
    }
);

// var_dump($verified);



function dividir($a, $b) {
    try {
        $result = $a/$b;

        echo('CONTINUA ================');
    } catch(Exception $e) {
        echo('Error: '.$e->getMessage());
    } finally {
        echo('Me ejecuto si o si.');
    }
}

var_dump(dividir(1000, 0));









// Determinar si un numero es capicua usando arrays y sus funciones




// Determinar si una cadena de texto es palindromo usando strings y sus funciones





// Generar los primeros N elementos de las siguientes series:
// 1, 1, 2, 3, 5, 8, 13 ...
// 1, 2, 1, 4, 3, 6, 5, 8 ...
// 2, 3, 5, 7, 11, 13, 17 ...  // Solo es divisible entre 1 y si mismo
// 1, 2, 2, 1, 3, 4, 2, 5, 6, 3, 7, 8 ...
// 1, 1, 2, 2, 1, 3, 3, 4, 2, 5, 5, 6, 3, 7, 7, 8 ...























// CALLBACKS
// Es una función o método que se pasa como argumento a otra función para que esta lo ejecute cuando lo necesite.

// function operarPositivos($a, $b, $sumarFunction) {
//   $resultA = abs($a);
//   $resultB = abs($b);

//   $result = $sumarFunction($resultA, $resultB);

//   return $result;
// }

// var_dump(operarPositivos(6, -6, fn($a, $b) => $a + $b ));





$date = new DateTimeImmutable();



$date = $date->modify('-20 seconds');
$date = $date->modify('+90 days');

$date = $date->format('Y-m-d');
// MM/DD/YYYY
// DD/MM/YYYY

// y Año corto 2 digitos, Y 4 digitos
var_dump($date);


$inicio = new DateTimeImmutable('2026-11-01');
$fin = new DateTimeImmutable('2026-11-30');

var_dump($inicio < $fin);