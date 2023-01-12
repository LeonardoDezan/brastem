<?php
$servidor = "localhost";
$banco = "brastem_db";
$usuario = "roost";
$senha = "";
try{
    $conn = new PDO("mysql:host=$servidor;dbname=$banco", $usuario, $senha);
    echo "conectado";
}catch(PDOException $erro){
    echo "erro ao conectar no banco de dados:   " . $erro->getMessage();
}



?>