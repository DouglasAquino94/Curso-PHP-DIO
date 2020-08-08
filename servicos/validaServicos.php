<?php
    
    function validaNome(string $nome) : bool{
        if(empty($nome) || strlen($nome) < 3 || strlen($nome) > 20){
            setMsgErro('O campo "nome" deve conter de 3 á 20 caracteres!');
            return false;
        }
        return true;
    }

    function validaIdade(string $idade) : bool{
        if(!is_numeric($idade) || empty($idade) || $idade <= 0){
            setMsgErro('Idade inválida!');
            return false;
        }
        return true;
    }

    function validaCompetidor(string $nome, string $idade) : ?string {        
        //Array vazio
        $categorias = [];

        //Adicionando itens ao Array
        $categorias[] = 'infantil';
        $categorias[] = 'adolescente';
        $categorias[] = 'adulto';
        $categorias[] = 'idoso';

        if(validaNome($nome) && validaIdade($idade)){
            
            removeMsgErro();
            
            if($idade >= 6 && $idade < 12) {
                for($c = 0; $c < count($categorias); $c++){
                    if($categorias[$c] == 'infantil'){
                        setMsgSucesso('O atleta '.$nome.' vai competir na categoria INFANTIL');
                        //$_SESSION['mensagem-de-sucesso'] = 'O atleta '.$nome.' vai competir na categoria INFANTIL';
                        return null;
                    }
                }
        
            } else if ($idade >= 12 && $idade < 18){
                for($c = 0; $c < count($categorias); $c++){
                    if($categorias[$c] == 'adolescente'){
                        setMsgSucesso('O atleta '.$nome.' vai competir na categoria ADOLESCENTE');
                        //$_SESSION['mensagem-de-sucesso'] =  'O atleta '.$nome.' vai competir na categoria ADOLESCENTE';
                        return null;
                    }
                }
        
            } else if ($idade >= 18 && $idade < 50) {
                for($c = 0; $c < count($categorias); $c++){
                    if($categorias[$c] == 'adulto'){
                        setMsgSucesso('O atleta '.$nome.' vai competir na categoria ADULTO');
                        //$_SESSION['mensagem-de-sucesso'] =  'O atleta '.$nome.' vai competir na categoria ADULTO';
                        return null;
                    }
                }
        
            } else if ($idade >= 50) {
                for($c = 0; $c < count($categorias); $c++){
                    if($categorias[$c] == 'idoso'){
                        setMsgSucesso('O atleta '.$nome.' vai competir na categoria IDOSO');
                        //$_SESSION['mensagem-de-sucesso'] = 'O atleta '.$nome.' vai competir na categoria IDOSO';
                        return null;
                    }
                }
            
            } else {
                setMsgErro('A idade informada não se encaixa em nenhuma das categorias disponíveis!');
            }
        
        } else {
            
            removeMsgSucesso();
            return getMsgErro();
        }
        
    }
?>