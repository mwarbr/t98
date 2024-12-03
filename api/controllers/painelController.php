<?php
# Recebendo os dados do form
# se o formulário foi enviado
# isset() função que checa se a variável existe
if( isset( $_POST['cadastrar'] ) )
{
    $pergunta = $_POST['pergunta'];
    $resposta =  $_POST['resposta'];

    // insere no banco de dados

}

?>