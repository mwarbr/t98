<h1>Perguntas e Respostas - F.A.Q</h1>

<!-- 
    Verbos do http - formas de envio de dados
        - GET - envia através da URL
        - POST - envia através do cabeçalho
        - PUT - 
        - DELETE - 

Caminho relativo        
    pasta/arquivo.ext - para a pasta no nivel
    /pasta/arquivo.ext - raiz do site
    ./pasta/arquivo.ext - raiz onde da index 
    ../pasta/arquivo.ext - sobe um nível
-->

<form action="./controllers/painelController.php" method="POST" >

    <h2>Cadastro de Perguntas e Respostas</h2>

    <div>
        <label>Pergunta:</label>
        <input type="text" placeholder="Digite a pergunta" id="pergunta" name="pergunta" >
    </div>

    <div>
        <label>Resposta:</label>
        <textarea id="resposta" name="resposta" placeholder="Digite a resposta" ></textarea>
    </div>

    <input type="submit" value="Cadastrar Pergunta" id="cadastrar" name="cadastrar" >

</form>

