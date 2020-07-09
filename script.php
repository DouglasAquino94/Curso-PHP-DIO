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

    $nome = 'Eduardo';
    $idade = '50';
    

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
        echo 'Idade inválida ou não permitida!';
    }

?>