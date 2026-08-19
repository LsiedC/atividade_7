<?php
include "../infra/conexao.php";

if($_SERVER["REQUEST_METHOD"] == "POST"){
$nomePrato = $_POST["nomePrato"];
$preco = $_POST["preco"];
$categoria = $_POST["categoria"];

$sql = "INSERT INTO pratos (nomePrato, preco, categoria) VALUES('$nomePrato', '$preco', '$categoria')";

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
    <main>
        <a href="menuPrincipal.php">Voltar para tela principal</a>
    </main>
    <form action="" method = "POST">

        <input type="text" id = "nomePrato" name= "nomePrato"> 
        <br>
        <input type="text" id = "preco" name = "preco"> 
        <br>
        <select id ="categoria" name = "categoria">
        <option value="Principal">Principal</option>
        <option value="Sobremesa">Sobremesa</option>
        <option value="Bebida">Bebida</option>
        </select>

       <br> 
       <button type="submit"> Enviar </button> 
    </form>
</body>
</html>