<?php
include "../infra/conexao.php";

if($_SERVER["REQUEST_METHOD"] == "POST"){
$nome = $_POST["nome"];
$email = $_POST["email"];

$sql = "INSERT INTO usuario(nome, email) VALUES(?, ?)";

$stmt = mysqli_prepare($conexao, $sql);
mysqli_stmt_bind_param($stmt, "ss", $nome, $email);
mysqli_stmt_execute($stmt);
mysqli_stmt_close($stmt);
}
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Cadastro de Usuarios</h1>    

    <form action="" method="POST">
        
        <label for="nome">Nome:</label>
        <br>
        <input type="text" id="nome" name="nome"> 
        <br>
        <br>
        <label for="email">E-mail:</label>
        <br>
        <input type="text" id="email" name="email"> 
        <br>
       <br> 
       <button type="submit"> Enviar </button> 
       <br>
       <br>
        <a href="menuPrincipal.php">Voltar para tela principal</a>

        <br><br>
    </form>
</body>
</html>