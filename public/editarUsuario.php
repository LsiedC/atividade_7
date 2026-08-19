<?php
include "../infra/conexao.php";

$id = $_GET["id"];

$sql = "SELECT * FROM usuario WHERE idUser = ?";
$stmt = mysqli_prepare($conexao, $sql);
mysqli_stmt_bind_param($stmt, "i", $id);
mysqli_stmt_execute($stmt);
$resultado = mysqli_stmt_get_result($stmt);
$usuario = mysqli_fetch_assoc($resultado);
mysqli_stmt_close($stmt);

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Usuário</title>
</head>
<body>

    <main>
        <h2>Editando o usuário <?php echo $usuario["nome"] ?>!</h2>

        <form action="atualizarUsuario.php" method="POST">

            <input type="hidden" name="idUser" value="<?php echo $usuario["idUser"] ?>">

            <label for="nome">Nome:</label>
            <input type="text" name="nome" value="<?php echo $usuario["nome"] ?>">
            <br>

            <label for="email">E-mail:</label>
            <input type="text" name="email" value="<?php echo $usuario["email"] ?>">
            <br>
            <button type="submit">Atualizar</button>

        </form>

    </main>

</body>