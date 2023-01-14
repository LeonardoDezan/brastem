<?php
$servidor = "localhost";
$banco = "brastem_db";
$usuario = "root";
$senha = "";
try{
    $conn = new PDO("mysql:host=$servidor;dbname=$banco", $usuario, $senha);
    $sql = "INSERT INTO tb_clientes (nome_cliente, cnpj_cpf) values ('Leonardo Dezan', '43126726879')";
    $resultado = $conn->exec($sql);

    $sql_listar = "SELECT * FROM tb_clientes WHERE id_clientes = '1'";
    


}catch(PDOException $erro){
    echo "erro ao conectar no banco de dados:   " . $erro->getMessage();
}




?>