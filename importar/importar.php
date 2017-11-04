<?php
include_once 'conexion.php';
include_once 'funciones.php';

$xml = simplexml_load_file('xml.xml');


// Cogemos el primer nodo del XML
foreach ($xml->children() as $ul){
    $dbcampo = "";
    $dbvalor = "";
    $numfotos = 0;
    // Cogemos cada uno de los campos
    foreach ($ul->children() as $li){
        $datos = setData($li);
        $dbcampo .= $datos["dbcampo"];
        $dbvalor .= $datos["dbvalor"];
    }
    $dbcampo .= 'numfotos';
    $dbvalor .= $numfotos;
    $dbcampo = trim($dbcampo,",");
    $dbvalor = trim($dbvalor,",");

    $sql = "INSERT IGNORE INTO inmobiliaria.ofertas($dbcampo) VALUES($dbvalor)";

    if ($conn->query($sql) === TRUE) {
        echo "Nuevo registro creado correctamente.";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
$conn->close();

