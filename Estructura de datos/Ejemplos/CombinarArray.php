<?php


$edades = array(
    "carlos" => 23,
    "maria" => 21,
    "juan" => 15,
    "jairo" => 18,
    "luis" => 15
);

asort($edades);


print_r($edades);


$EdadesFi = array_filter($edades, function($edad) {
    return $edad > 18;
});

print_r($EdadesFi);


$datos1 = array(
    "nombre" => "juan",
    "edad" => 20,
    "correo" => "prueba@gmail.com"
);

$datos2 = array(
    "ciudad" => "Bucaramanga",
    "profesion" => "dj"
);


$datosCombinados = array_merge($datos1, $datos2);


print_r($datosCombinados);

?>

