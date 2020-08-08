<?php 
    session_start();

    //Obtendo e setando as mensagens de sucesso
    function setMsgSucesso(string $msg) : void {
        $_SESSION['mensagem-de-sucesso'] = $msg;
    }

    function getMsgSucesso() : ?string {
        if(isset($_SESSION['mensagem-de-sucesso']))
        return $_SESSION['mensagem-de-sucesso'];

        return null;
    }

    //Obtendo e setando as mensagens de erro
    function setMsgErro(string $msg) : void {
        $_SESSION['mensagem-de-erro'] = $msg;
    }

    function getMsgErro() : ?string {
        if(isset($_SESSION['mensagem-de-erro']))
            return $_SESSION['mensagem-de-erro'];  

            return null;
    }

    //Removendo as Mensagens da tela
    function removeMsgErro() : void {
        if(isset($_SESSION['mensagem-de-erro'])){
            unset($_SESSION['mensagem-de-erro']);
        }

    }

    function removeMsgSucesso() : void {
        if(isset($_SESSION['mensagem-de-sucesso'])){
            unset($_SESSION['mensagem-de-sucesso']);
        }
    }
?>