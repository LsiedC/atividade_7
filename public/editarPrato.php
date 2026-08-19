<?php
include "../infra/conexao.php";

$id = $_GET["id"];

$sql = "SELECT * FROM pratos WHERE idPrato = $id";

$resultado = mysqli_query($conexao, $sql);
$pratos = mysqli_fetch_assoc($resultado);

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Prato</title>
</head>
<body>

    <main>
        <h2>Editando o prato <?php echo $pratos["nomePrato"] ?>!</h2>

        <form action="atualizarPrato.php" method="POST">

            <input type="hidden" name="idPrato" value="<?php echo $pratos["idPrato"] ?>">

            <label for="nome">Nome do prato:</label>
            <input type="text" name="nomePrato" value="<?php echo $pratos["nomePrato"] ?>">
            <br>

            <label for="email">Preço do prato:</label>
            <input type="text" name="preco" value="<?php echo $pratos["preco"] ?>">
            <br>

            <label for="email">Categoria::</label>
            <input type="text" name="categoria" value="<?php echo $pratos["categoria"] ?>">
            <br>

            <button type="submit">Atualizar</button>

        </form>

    </main>

</body>