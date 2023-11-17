<?php
    if($_POST)
    {
        $nome = $_POST['nome'];
        $sobrenome = $_POST['sobrenome'];
        if(empty(($nome) || empty($sobrenome)))
        echo  "<p> Campo vasio";
    else
        {
        print_r($_POST);
        }
    }
    ?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Curso $_POST</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
 <div class="container">
    <form action="" method="post">
    <p>
        Nome:
        <br>
        <input name="nome">
        <br>
        SobreNome:
        <br>
        <input name="sobrenome">
        <br>
        <input type="submit" value="Enviar">
    </p>
    </form>
   
 </div>   
</body>
</html>