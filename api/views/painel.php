<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Painel de Controle</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.1/css/all.min.css" integrity="sha512-5Hs3dF2AEPkpNAR7UiOHba+lRSJNeM2ECkwxUIxC1Q/FLycGTbNapWXB4tP889k5T5Ju8fs4b1P5z/iB4nMfSQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <style>
    
    @import url('https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap');

    *
    {
        padding: 0;
        margin: 0;
        box-sizing: border-box;
        font-weight: 400;
        font-family: Roboto;
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
        position: relative;
    }

    #painel nav a::before {
        content: '';
        position: absolute;
        width: 100%;
        height: 2px;
        border-radius: 4px;
        background-color: #e76500; /*#18272F;*/
        bottom: 0;
        left: 0;
        transform-origin: right;
        transform: scaleX(0);
        transition: transform .3s ease-in-out;
    }

    #painel nav a:hover
    {
        color: #f1f1f1;
        text-shadow: 0 0 5px rgba(255,255,255,0.5);
        transition: all 0.5s ease-in-out;
        background: rgba(255,255,255,0.05);
    }

    #painel nav a:hover::before {
        transform-origin: left;
        transform: scaleX(1);
    }

    #painel nav a i
    {
        margin-right: 1rem;
        transform: scale(1.3);
        color: #f1f1f1;
    }

    /* aumenta o tamanho do ícone quando o mouse estiver sobre */
    #painel nav a:hover i
    {
        transform: scale(1.5);
        transition: all 0.5s ease-in-out;
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
        "<i class=\"fa-solid fa-user-tie\"></i>Usuários" => "?pagina=sistema&tela=usuarios",

        "<i class=\"fa-solid fa-comment\"></i>F.A.Q" => "?pagina=sistema&tela=faq"
    );


    # Temos Laços de Repetição: for foreach while
    # for( indice; comparação, incremento ){ códigos;} 
    # foreach( array as apelido ) {}
    # foreach extrai cada item do nosso vetor
    foreach( $links as $item => $valor )
    {
        echo '
            <a href="' . $valor . '"> 
                ' . $item . '
            </a>
        ';
    }
?>       
        
    </nav>

    <section>

        <?php
            switch( $_GET['tela'])
            {
                case "faq":
                    require_once("painelFaq.php");
                break;

                case "usuarios":
                    require_once("painelUsuarios.php");
                break;
            }
        ?>

    </section>

</div>

</body>
</html>