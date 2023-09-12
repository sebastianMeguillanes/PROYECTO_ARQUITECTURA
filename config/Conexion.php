<?php
$conexion = pg_connect("host=181.188.156.195 port=18004 dbname=mydb user=admin password=admin1234");

if (!$conexion) {
    printf("Error: No se pudo conectar a la base de datos\n");
    exit();
}

// A partir de aquí, puedes utilizar la variable $conexion para interactuar con la base de datos.

// Por ejemplo, ejecutar una consulta:
$query = "SELECT * FROM tu_tabla";
$resultado = pg_query($conexion, $query);

if (!$resultado) {
    echo "Error en la consulta.\n";
    exit();
}

// Recorrer los resultados de la consulta:
while ($fila = pg_fetch_assoc($resultado)) {
    // Hacer algo con los datos, por ejemplo, imprimirlos.
    print_r($fila);
}

// No olvides cerrar la conexión cuando hayas terminado:
pg_close($conexion);
?>
