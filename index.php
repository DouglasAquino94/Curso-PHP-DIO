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
        for($c = 0; $c <= count($categorias); $c++){
            if($categorias[$c] == 'infantil'){
                echo 'Categoria: Infantil';
            }
        }

    } else if ($idade >= 12 && $idade < 18){
        for($c = 0; $c <= count($categorias); $c++){
            if($categorias[$c] == 'adolescente'){
                echo 'Categoria: Adolescente';
            }
        }

    } else if ($idade >= 18 && $idade < 50) {
        for($c = 0; $c <= count($categorias); $c++){
            if($categorias[$c] == 'adulto'){
                echo 'Categoria: Adulto';
            }
        }

    } else {
        for($c = 0; $c <= count($categorias); $c++){
            if($categorias[$c] == 'idoso'){
                echo 'Categoria: Idoso';
            }
        }
    }

?>