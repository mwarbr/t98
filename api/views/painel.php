<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Painel de Controle</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.1/css/all.min.css" integrity="sha512-5Hs3dF2AEPkpNAR7UiOHba+lRSJNeM2ECkwxUIxC1Q/FLycGTbNapWXB4tP889k5T5Ju8fs4b1P5z/iB4nMfSQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <style>
    *
    {
        padding: 0;
        margin: 0;
        box-sizing: border-box;
    }

    html,
    body
    {
        width: 100%;
        height: 100%;
    }

    #painel
    {
        width: 100%;
        height: 100%;
        background: #e1e1e1;
        display: flex;
    }

    #painel nav
    {
        width: 12rem;/* 1rem fonte do navegador 16px*/
        height: 100%;
        background: #2e2e2e;
        color: #e1e1e1;
    }

    #painel nav h1
    {
        padding: 1.2rem 0;
        text-align: center;
    }

    #painel nav a
    {
        color: #e1e1e1;
        padding: 1.2rem;
        display: block;
        text-decoration: none;
    }

    #painel nav a i
    {
        margin-right: 1rem;
        transform: scale(1.5);
        color: #f1f1f1;
    }

    #painel .conteudos
    {
        width: 100%;
        height: 100%;
        overflow-x: hidden;
        overflow-y: auto;
    }

</style>

</head>
<body>

<div id="painel" >

    <nav>
        <h1>Logo</h1>

<?php

    # Tipos de Dados
        # texto - string - "Caracteres 1232"
        # inteiros - int - 133658
        # decimais - float - 1.53
        # lógico - bool - true / false
        # vetor - array - ['item', 'item'] array('chave' => 'valor')
        # objeto - object - instância da classe

    # variáveis são espaços na memório do servidor web
    # variáveis são dinâmicas
    $links = array(
        "" => ""
    );


    # Temos Laços de Repetição: for foreach while
    # for( indice; comparação, incremento ){ códigos;} 
    # foreach( array as apelido ) {}
    for( $i = 0; $i < 5; $i++ )
    {
        echo '
            <a href="#">
                <i class="fa-solid fa-comment"></i> 
                F.A.Q
            </a>
        ';
    }
?>       
        
    </nav>

    <section>

        <h1>Conteúdos</h1>

    </section>

</div>

</body>
</html>