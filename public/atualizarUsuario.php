<?php
include "../infra/conexao.php";

$idUser = $_POST["idUser"];
$nome = $_POST["nome"];
$email = $_POST["email"];

$sql = "UPDATE usuario 
        SET nome='$nome', email='$email' 
        WHERE idUser=$idUser";

mysqli_query($conexao, $sql);
header("location: menuPrincipal.php");
?>