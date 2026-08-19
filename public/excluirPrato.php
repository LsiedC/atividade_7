<?php
include "../infra/conexao.php";

$id = $_GET["id"];
$sql = "DELETE FROM pratos WHERE idPrato=$id";
mysqli_query($conexao,$sql);
header("Location: menuPrincipal.php");
?>