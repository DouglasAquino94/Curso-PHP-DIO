<?php
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
        echo 'O campo "nome" deve conter de 3 á 20 caracteres!';
    }

    if(!is_numeric($idade)){
        echo 'Idade inválida!';
    }
    
    //var_dump($nome);
    //var_dump($idade);

    if($idade >= 6 && $idade < 12) {
        for($c = 0; $c < count($categorias); $c++){
            if($categorias[$c] == 'infantil'){
                echo 'O atleta ',$nome,' vai competir na categoria INFANTIL';
            }
        }

    } else if ($idade >= 12 && $idade < 18){
        for($c = 0; $c < count($categorias); $c++){
            if($categorias[$c] == 'adolescente'){
                echo 'O atleta ',$nome,' vai competir na categoria ADOLESCENTE';
            }
        }

    } else if ($idade >= 18 && $idade < 50) {
        for($c = 0; $c < count($categorias); $c++){
            if($categorias[$c] == 'adulto'){
                echo 'O atleta ',$nome,' vai competir na categoria ADULTO';
            }
        }

    } else if ($idade >= 50) {
        for($c = 0; $c < count($categorias); $c++){
            if($categorias[$c] == 'idoso'){
                echo 'O atleta ',$nome,' vai competir na categoria IDOSO';
            }
        }
    
    } else {
        echo 'A idade informada não se encaixa em nenhuma das categorias disponíveis!';
    }

?>