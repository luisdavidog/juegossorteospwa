<?php
// Conecta a la base de datos MySQL y selecciona la fila que contiene el archivo que deseas descargar
// $archivo y $nombre_archivo deben ser definidos antes de incluir este archivo

// Establece las cabeceras Content-Type y Content-Disposition
header("Content-Type: application/octet-stream");
header("Content-Disposition: attachment; filename=" . $nombre_archivo);

// Envía el contenido del archivo al navegador
echo $archivo;
?>