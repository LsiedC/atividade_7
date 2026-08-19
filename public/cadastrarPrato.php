<?php
include "../infra/conexao.php";

if($_SERVER["REQUEST_METHOD"] == "POST"){
$nomePrato = $_POST["nomePrato"];
$preco = $_POST["preco"];
$categoria = $_POST["categoria"];
$idUser = $_POST["idUser"];


$sql = "INSERT INTO pratos (nomePrato, preco, categoria, idUser) VALUES(?, ?, ?, ?)";

$stmt = mysqli_prepare($conexao, $sql);
mysqli_stmt_bind_param($stmt, "sssi", $nomePrato, $preco, $categoria, $idUser);
mysqli_stmt_execute($stmt);
mysqli_stmt_close($stmt);
}

$resultado = mysqli_query($conexao, "SELECT * FROM usuario");

?>


<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method = "POST">

        <label for="nomePrato">Nome:</label>
        <br>
        <input type="text" id = "nomePrato" name= "nomePrato"> 
        <br>
        <label for="preco">Preço:</label>
        <br>
        <input type="text" id = "preco" name = "preco"> 
        <br>
        <label for="categoria">Categoria do que você quer:</label>
        <br>
        <select name="categoria" required>
            <option value="principal">Prato Principal</option>
            <option value="sobremesa">Sobremesa</option>
            <option value="bebida">Bebida</option>
        </select>
        <br>

       <br> 

       <label for="idUser">Usuário relacionado:</label>
       <br>
       <select name="idUser" required>
        <?php while ($usuario = mysqli_fetch_assoc($resultado)) { ?>

           <option value="<?php echo $usuario['idUser']; ?>">
            <?php echo $usuario['nome']; ?>
            </option>

            <?php } ?>

        </select>
        <br>

       <button type="submit"> Enviar </button> 
       <br>
       <a href="menuPrincipal.php">Voltar para tela principal</a>

    </form>
</body>
</html>