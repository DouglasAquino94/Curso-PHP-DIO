<?php
    session_start();

    //Array vazio
    $categorias = [];

    //Adicionando itens ao Array
    $categorias[] = 'infantil';
    $categorias[] = 'adolescente';
    $categorias[] = 'adulto';
    $categorias[] = 'idoso';

    //Array na tela
    //print_r($categorias);

    $nome = $_POST['nome'];
    $idade = $_POST['idade'];

    if(empty($nome) || strlen($nome) < 3 || strlen($nome) > 20){
        $_SESSION['mensagem-de-erro'] = 'O campo "nome" deve conter de 3 á 20 caracteres!';
        header('location: index.php');
        return;
    }

    else if(!is_numeric($idade) || empty($idade) || $idade <= 0){
        $_SESSION['mensagem-de-erro'] = 'Idade inválida';
        header('location: index.php');
        return;
    }
    
    //var_dump($nome);
    //var_dump($idade);

    if($idade >= 6 && $idade < 12) {
        for($c = 0; $c < count($categorias); $c++){
            if($categorias[$c] == 'infantil'){
                $_SESSION['mensagem-de-sucesso'] = 'O atleta '.$nome.' vai competir na categoria INFANTIL';
                header('location: index.php');
                return;
            }
        }

    } else if ($idade >= 12 && $idade < 18){
        for($c = 0; $c < count($categorias); $c++){
            if($categorias[$c] == 'adolescente'){
                $_SESSION['mensagem-de-sucesso'] =  'O atleta '.$nome.' vai competir na categoria ADOLESCENTE';
                header('location: index.php');
                return;
            }
        }

    } else if ($idade >= 18 && $idade < 50) {
        for($c = 0; $c < count($categorias); $c++){
            if($categorias[$c] == 'adulto'){
                $_SESSION['mensagem-de-sucesso'] =  'O atleta '.$nome.' vai competir na categoria ADULTO';
                header('location: index.php');
                return;
            }
        }

    } else if ($idade >= 50) {
        for($c = 0; $c < count($categorias); $c++){
            if($categorias[$c] == 'idoso'){
                $_SESSION['mensagem-de-sucesso'] = 'O atleta '.$nome.' vai competir na categoria IDOSO';
                header('location: index.php');
                return;
            }
        }
    
    } else {
        echo 'A idade informada não se encaixa em nenhuma das categorias disponíveis!';
    }

?>