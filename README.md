¿Qué es un Array?
Un array es una estructura de datos que permite almacenar múltiples valores en una sola variable. En PHP, los arrays pueden ser 
indexados (donde los índices son números enteros)o asociativos (donde los índices son cadenas de texto). Los arrays son muy útiles 
para manejar colecciones de datos relacionados.

Explicación del Código
Definición de un Array Asociativo:

PHP

$edades = array(
    "carlos" => 23,
    "maria" => 21,
    "juan" => 15,
    "jairo" => 18,
    "luis" => 15
);
Aquí se define un array asociativo llamado $edades, donde las claves son nombres de personas y los valores son sus edades.
Ordenar el Array:

PHP

asort($edades);
La función asort() ordena el array $edades en orden ascendente según los valores (las edades), manteniendo la asociación entre claves y valores.
Imprimir el Array Ordenado:

PHP

print_r($edades);
print_r() se utiliza para imprimir el array ordenado, mostrando las claves y sus valores correspondientes.
Filtrar el Array:

PHP

$EdadesFi = array_filter($edades, function($edad) {
    return $edad > 18;
});
array_filter() se utiliza para crear un nuevo array $EdadesFi que contiene solo las personas mayores de 18 años. La función anónima (closure) 
define el criterio de filtrado.
Imprimir el Array Filtrado:

PHP

print_r($EdadesFi);
Se imprime el array filtrado, mostrando solo las personas mayores de 18 años.
Definición de Dos Arrays Asociativos:

PHP

$datos1 = array(
    "nombre" => "juan",
    "edad" => 20,
    "correo" => "prueba@gmail.com"
);

$datos2 = array(
    "ciudad" => "Bucaramanga",
    "profesion" => "dj"
);
Se definen dos arrays asociativos, $datos1 y $datos2, que contienen información personal y profesional, respectivamente.
Combinar los Arrays:

PHP

$datosCombinados = array_merge($datos1, $datos2);
array_merge() combina los dos arrays en uno solo, $datosCombinados, que contiene todas las claves y valores de ambos arrays.
Imprimir el Array Combinado:

PHP

print_r($datosCombinados);
Se imprime el array combinado, mostrando toda la información unificada.
Conclusión
Este código demuestra cómo trabajar con arrays en PHP, incluyendo cómo ordenarlos, filtrarlos y combinarlos. Los arrays son una herramienta fundamental 
en programación, ya que permiten manejar y manipular colecciones de datos de manera eficiente. En este ejemplo, se utilizan arrays asociativos para almacenar 
y procesar datos relacionados con personas, lo cual es una práctica común en el desarrollo de aplicaciones.
