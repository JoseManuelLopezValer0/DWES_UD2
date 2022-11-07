<?php
/**
 * 
 * Documentación
 * 
 * @autor Jose Manuel
 * @version 1.0
 */

include 'config/config.php';
include_once 'lib/contador.php';

echo "Creando un contador...<BR>";
$a = new Contador();

echo "Mostrar: " . Contador::mostrar() . "<br>";
echo "<br>";

echo "Incrementar: " . Contador::incrementar() . "<br>";
echo "<br>";

echo "Nuevo contador...<BR>"; 
$b = new Contador();

echo "Mostrar: " . Contador::mostrar() . "<br>";
echo "<br>";

echo "Incrementar: " . Contador::incrementar() . "<br>";
echo "<br>";

echo "Incrementar: " . Contador::incrementar() . "<br>";
echo "<br>";

echo "Contadores instanciados: " . Contador::getContadoresInstanciados() . "<br>";
echo "<br>";

echo "Index.php: <a href='index.php'>index.php</a><br>";
echo "Contador.php: <a href='lib/contador.php'>contador.php</a><br>";
?>