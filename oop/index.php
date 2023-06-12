<?php require_once 'vendor/autoload.php';  ?>

<!DOCTYPE html>
<html lang="pt">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP POO</title>
</head>

<body>
    <h1>PHP Orientado a Objeto</h1>

    <?php
    $produto = new \oop\Model\Produto();
    $produto->setNome('Computador Dell');
    $produto->setDescricao('Bom produto');

    $produtoDao = new \oop\Model\ProdutoDao;
    $produtoDao->create($produto);

    ?>
    
    <br>

    <?php
    foreach ($resultado as $value) {
        echo '<p>' . $value->nome . '</p> <br>';
        echo '<p>' . $value->descricao . '</p> <br>';
    }

    ?>

</body>

</html>