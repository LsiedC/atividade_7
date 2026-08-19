<?php
include "../infra/conexao.php";

$id = $_GET["id"];
$sql = "DELETE FROM usuario WHERE idUser=$id";
mysqli_query($conexao,$sql);
header("Location: menuPrincipal.php");
?>