/*
	Projeto: Banco de Dados do App da Ong
    Desenvolvido por: Seu nome
    Data: Agosto/2024
    versão: 1.0
*/

# apaga o banco se existir para subir a nova versão
DROP DATABASE IF EXISTS app_ong;
DROP SCHEMA IF EXISTS app_ong;

# Criar o banco de dados se ele não existir
CREATE DATABASE IF NOT EXISTS app_ong;
CREATE SCHEMA IF NOT EXISTS app_ong;

# dentro do BD teremos as tabelas
# cada tabela para uma entidade ( usuarios, membros )
# nome da tabela sempre em minúsculas e no plural
# nome das colunas sempre em snake_case em minúsculas e no singular

# Tipos de Dados
	# tipo VARCHAR( comprimento ) - "texto123" - 0 a 255 letras
	# tipo DATETIME aceita apenas dia e hora - 2024-08-27 09:56:32
	# tipo INT(3) - só números inteiros - XXX - 999 

# toda tabela OBRIGATORIAMENTE tem um campo PK ( primary key - chave primária )
# que campo da tabela que com certeza não se repete
# todo campo por padrão aceita valor NULL, não precisa ser preenchido
# NOT NULL - campo obrigatório

CREATE TABLE app_ong.usuarios(
	usuario_id INT( 255 ) NOT NULL AUTO_INCREMENT ,
	nome_completo VARCHAR( 255 ),
    email VARCHAR( 255 ) NOT NULL ,
    senha VARCHAR( 32 ) NOT NULL ,
    data_criacao DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP() ,
    data_modificacao DATETIME,
		PRIMARY KEY ( usuario_id ), 
		UNIQUE( email ) COMMENT "Tabela de Usuarios com PK e campo único UQ"
);

# Realizando o cadastro na tabela Crud - eperações de manutenção da tabela
# Create - Cadastro
# Precisamos passar todos os campos NOT NULL (obrigatórios)
INSERT INTO app_ong.usuarios (
    email,
    senha
 ) VALUES ( 
    "marcio_fernandes@yahoo.com.ar",
    "1234"
 );
 
 # Consultar tudo que há na tabela - cRud - Read - Consulta
 SELECT * FROM app_ong.usuarios;



