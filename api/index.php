<?php

// Comentário de linha única

# comentário de linha única

/*
        Bloco de Comentário

        PHP foi criado em 1994 pelo Rasmus Lerdorf para facilitar o envio de seus arquivos em usar a linguagem Perl.

        O PHP é uma linguagem SERVER SIDE, executada/processada no servidor, com maior segurança.

        Ele é processado e só sai do servidor TEXTOS e não o código fonte.
        O PHP é sensível a caixa, diferencia maiúsculas e minúsculas.

        Os arquivos são salvos como .php e podem ter HTMl, CSS, JS dentro deles.

        - phpinfo() - função que mostra as configs do servidor
        - echo "" - escreve texto/strings
        - print() - escreve textos

        Sintaxe

            <?php comandos;  ?>
    */

# echo "<h1>Bem vindo ao Site</h1>"; // comando de escrita (saída)

# print("<h2> Novo Texto </h2>"); // escreve texto

# echo phpinfo();

# require_once("public/topo.php"); # insere um arquivo

# No php as variáveis são dinaminamicamente tipadas, podem armazenar ter qualquer tipo de dados.
# No C# string nome = "texto"; variáveis são tipadas.
# No PHP $nome = "valor";

# Pegando variáveis GET (url) - usado principalmente para navegação

$pagina = @$_GET['pagina'];

# echo '<h1 class="titulo" >' . $pagina .'</h1>'; # string

# estruturas condicionais no php: if else elseif switch
# escolha caso / switch case
switch( $pagina ) 
{
    case "sistema":
        require_once("views/painel.php");
        break;
        
    default: require_once("views/home.php");
}

?>
