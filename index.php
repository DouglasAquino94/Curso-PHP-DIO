<?php 
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Curso-PHP-DIO</title>
</head>
<body>
    <h3>Dados pessoais</h3>
    <form action="script.php" method="post">
        
        <?php
            //Operador ternário... Sintaxe: condição ? ação1 : ação2
            $msgSucesso = isset($_SESSION['mensagem-de-sucesso']) ? $_SESSION['mensagem-de-sucesso'] :'';
            if(!empty($msgSucesso)){
                echo $msgSucesso;
            }

            $msgErro = isset($_SESSION['mensagem-de-erro']) ? $_SESSION['mensagem-de-erro'] :'';
            if(!empty($msgErro)){
                echo $msgErro;
            }
        ?>

        <p>Nome: <input type="text" name="nome" id="nome"></p>
        <p>Idade: <input type="text" name="idade" id="idade"></p>
        <p><input type="submit" value="Enviar"></p>
    </form>    
</body>
</html>