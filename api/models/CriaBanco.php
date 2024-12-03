<?php
/**
 * Classe que cria o banco da aplicação
 * Modelo do que pode ser feito
 * 
 * - atributos | propriedades | variáveis
 * - métodos | funções
 * 
 */
class CriaBanco
{
    # Propriedades/variáveis
    private $loginBanco = "root";
    private $senhaBanco = "root";
    private $nomeBanco = "python";
    private $nomeServidor = "db";
    private $portaServidor = "3306";
    private $conexao = null; # armazena a conexão 

    # Métodos/Funções
    public function ConectaBD()
    {
        # PDO é uma classe do PHP que permite abstrair o banco mysql - postgresql 
        $this->conexao = new PDO( "mysql:host={$this->nomeServidor};dbname={$this->nomeBanco}", $this->loginBanco, $this->senhaBanco );

        return $this->conexao;

    }

    function CriaTabelas()
    {
        # código SQL a ser executado
        $sql = "CREATE TABLE IF NOT EXISTS invasoes(
            id_invasao INT(255) NOT NULL AUTO_INCREMENT,
            ip VARCHAR(45) NOT NULL,
            data_invasao DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
            fingerprint LONGTEXT,
            PRIMARY KEY(id_invasao)
        );";

        # rodando o SQL
        $resultado = $this->conexao->query( $sql );
    }

    # Crud - Create - cadastro
    function Cadastra()
    {
        $sql = "INSERT INTO python.invasoes (
            ip,# campos da tabela (colunas)
            fingerprint
        ) VALUES (
           '192.168.0.1',
           'máquina01' 
        );";

        $this->conexao->query( $sql );
    }
}

$banco = new CriaBanco(); # criamos um objeto|instância da classe (utilizável).

# conecta com o banco
$banco->ConectaBD();

# executar a criação da tabela
$banco->CriaTabelas();

# cadastra na tabela invasão
$banco->Cadastra();

?>