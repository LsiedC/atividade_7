<?php
include "../infra/conexao.php";

$idPrato = $_POST["idPrato"];
$nomePrato = $_POST["nomePrato"];
$preco = $_POST["preco"];
$categoria = $_POST["categoria"];

$sql = "UPDATE pratos 
        SET nomePrato='$nomePrato', preco='$preco', categoria='$categoria'
        WHERE idPrato=$idPrato";

mysqli_query($conexao, $sql);
header("location: menuPrincipal.php");
?>