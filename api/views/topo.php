<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Teste de Front End</title>

    <link rel="stylesheet" href="/css/splide.min.css">
    <link rel="stylesheet" href="/css/themes/splide-default.min.css">

    <link rel="stylesheet" href="/css/styles.css">

    <script src="/js/splide.min.js" defer></script>
    <script src="/js/comportamentos.js" defer></script>

</head>

<body>
    <div class="telefones">
        <p>
            <a href="tel:551112341234">11 1234-1234</a>
        </p>
        <p>
            <a href="https://wa.me/5511912341234?text=Tenho uma dúvida: ">11 91234-1234</a>
        </p>
    </div>

    <header>

        <figure>
            <img src="https://placehold.co/260x150/orange/white?text=LOGO\n(260x150)" alt="">
        </figure>

        <nav>
            <ul>
                <!-- menu principal -->
                <li><a class="paginaAtual" href="index.html">Home</a></li>
                <li><a href="empresa.html">Empresa</a></li>
                <li><a href="servicos.html">Serviços</a></li>
                <li><a href="contato.html">Contato</a></li>
                <li>
                    <a id="sistema" href="#">Sistema</a>
                    <!-- Submenu de sistemas 01  -->
                    <ul id="sub01" class="esconde">
                        <li>
                            <a href="?pagina=sistema">Painel</a>
                            <!-- Submenu do item do sistema  -->
                            <ul id="sub02" class="esconde">
                                <li><a href="#">Submenu02</a></li>
                            </ul>
                        </li>
                    </ul>

                </li>
            </ul>
        </nav>

    </header>