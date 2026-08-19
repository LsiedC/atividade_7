<?php
include "../infra/conexao.php";

if($_SERVER["REQUEST_METHOD"] == "POST"){
$nome = $_POST["nome"];
$email = $_POST["email"];

$sql = "INSERT INTO usuario(nome, email) VALUES('$nome','$email')";
mysqli_query($conexao, $sql);

}
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <form action="" method="POST">
        
        <label for="nome">Nome:</label>
        <br>
        <input type="text" id="nome" name="nome"> 
        <br>
        <label for="email">E-mail:</label>
        <br>
        <input type="text" id="email" name="email" required> 
        
       <br> 
       <button type="submit"> Enviar </button> 
        <br>
        <br>
       <main>
        <a href="menuPrincipal.php">Voltar para tela principal</a>
    </main>
    </form>
</body>
</html>