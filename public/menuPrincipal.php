<?php
include "../infra/conexao.php";
if($_SERVER["REQUEST_METHOD"] == "POST"){
$nome = $_POST["nome"];
$email = $_POST["email"];

$sql = "INSERT INTO usuario(nome, email) VALUES('$nome','$email')";
mysqli_query($conexao, $sql);

}
$pratos = mysqli_query($conexao, "SELECT * FROM pratos");
$resultado = mysqli_query($conexao, "SELECT * FROM usuario");

?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <main>
        <h1>O que você deseja fazer? </h1>
        <h3>Cadastrar Usuario</h3>
            <form action="" method="POST">
            
            <label for="nome">Nome:</label>

            <br>
            <input type="text" placeholder="Lucas" id="nome" name="nome" required> 
            <br>

            <label for="email">E-mail:</label>

            <br>
            <input type="text" placeholder="venso@gmail" id="email" name="email" required> 
            <br> 
            <br>
            <button type="submit"> Enviar </button> 
        </form>

        <br>
        
        <a href="cadastrarPrato.php">Cadastrar Prato</a>
        <br>
        <?phpinclude "listarPrato.php";?>
        <br>
        <h2> Cardápio do Dia</h2>
            <table>

            <tr>

                <th> ID </th>
                <th> Prato </th>
                <th> Preço </th>
                <th> Categoria </th>

            </tr>
            <?php while($prato = mysqli_fetch_assoc($pratos)) { ?>
            <tr>

                <td> <?php echo $prato["idPrato"] ?></td>
                <td> <?php echo $prato["nomePrato"] ?></td>
                <td> <?php echo $prato["preco"] ?></td>
                <td> <?php echo $prato["categoria"] ?></td>
                
                <td>
                     <a href="editarPrato.php?id=<?php echo $prato["idPrato"] ?>">Editar</a>
                     <a href="excluirPrato.php?id=<?php echo $prato["idPrato"] ?>">Excluir</a>
               </td>
                
            </tr>

            <?php } ?>

            </table>
        <br>
        <a href="listarPratoUsuario.php">Listar Pratos por Usuario</a>
        <br>
        

        <div>
            <h2>Usuarios Cadastrados</h2>
            <table>
                <tr>
                    <th>ID</th>
                    <th>Usuarios</th>
                    <th>Email</th>
                    
                </tr>
                <?php while ($usuario = mysqli_fetch_assoc($resultado)) { ?>
                    <tr>
                        <td><?php echo $usuario["idUser"] ?></td>
                        <td><?php echo $usuario["nome"] ?></td>
                        <td><?php echo $usuario["email"] ?></td>
                        <td>
                            <a href="editarUsuario.php?id=<?php echo $usuario["idUser"] ?>">Editar</a>
                            <a href="excluirUsuario.php?id=<?php echo $usuario["idUser"] ?>">Excluir</a>
                        </td>
                    </tr>
                <?php } ?>
            </table>
        </div>
    </main>
</body>
</html>