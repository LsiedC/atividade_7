<?php
include "../infra/conexao.php";
$pratos = mysqli_query($conexao, "SELECT * FROM pratos");
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

</tr>

<?php } ?>

</table>
    </main>
</body>
</html>


