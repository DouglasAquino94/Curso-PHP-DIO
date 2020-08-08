<?php
    include "servicos/validaServicos.php";
    include "servicos/msgSessao.php";

    $nome = $_POST['nome'];
    $idade = $_POST['idade'];   
    
    validaCompetidor($nome, $idade);

    header('location: index.php');
    
?>