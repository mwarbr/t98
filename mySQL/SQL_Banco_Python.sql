# SQL - síquel - linguagem dos Bancos de dados
# Strutured Query Language - Linguagem Estruturada de Busca
# SGBD - sistema gerenciador de bancos de dados
# Oracle DBII SQL Server MariaDB MySQL Postgres

# exibir os BD
SHOW DATABASES; # SHOW SCHEMAS;

# Escolher o Banco de dados
USE sakila;

# exibir as tabelas do BD
SHOW TABLES;

# filtrando a busca pelo nome
SHOW TABLES LIKE '%s%';

# exibir a estrutura de uma tabela
DESCRIBE staff;

# buscar dados na tabela de staff do sakila
SELECT email, password FROM sakila.staff;

# buscar dados na tabela do BD sakila e cadastrar no BD python
# COUNT() - conta os itens encontrados
SELECT * FROM sakila.actor; # atores 200
SELECT * FROM sakila.customer; # clientes 599
SELECT COUNT(*) FROM sakila.customer; # conta os dados encontrados

# inserir registro no BD 
INSERT INTO python.usuarios (
	login,# campo ou coluna NN not null
    senha
) VALUES (
	"maycon.aguerra@sp.senac.br",
	MD5("1234")
);

SELECT * FROM python.usuarios;

# comandos de config do BD
# Define a horário de Brasília
SET time_zone= "America/Sao_Paulo";
SET time_zone= "-03:00";

# Alterar a estrutura da tabela SEM PERDER seus dados atuais
# Se você usar o Forward Engineer do Workbench TODOS os dados
# serão apagados.
# MODIFY ou CHANGE
ALTER TABLE python.usuarios CHANGE senha senha varchar(255);

# Para limpar os dados da tabela - zerar
TRUNCATE python.usuarios;

# vamos montar a nossa tabela de usuário a partir da sakila.customer 

# todos os dados da tabela
SELECT * FROM sakila.customer;

# Filtro - tráz os 10 primeiros registros da tabela
SELECT * FROM sakila.customer LIMIT 0,10;

# Reordenar a busca ORDER BY coluna
# ASC - crescente A-Z | DESC - decrescente Z-A
SELECT * FROM sakila.customer ORDER BY first_name DESC LIMIT 0,10;

# Agrupar resultados - só traz resultados que sejam repetidos
SELECT first_name, last_name FROM sakila.customer GROUP BY last_name;

# cadastrar e-mail e uma senha 05 pessoas ordenadas pelo nome
SELECT email FROM sakila.customer ORDER BY first_name LIMIT 0,5;

# realizando um cadastro a partir da busca
INSERT INTO python.usuarios (
	login,
    senha,
    data_alteracao )
	SELECT email, MD5("1234"), "2024-10-03 11:52:55" 
		FROM sakila.customer 
			ORDER BY first_name LIMIT 0,5;

# 1.	Escreva o comando SQL para selecionar 5 registros de e-mail,
# nome e sobrenome da tabela sakila.customer ordenados de 
# forma descendente.
SELECT email, first_name, last_name 
	FROM sakila.customer 
		ORDER BY first_name DESC
			LIMIT 0,5;

# 2. 2.	Selecione da tabela sakila.customer  5 
# registros que comecem com a letra “m” ordenados de forma ascendente. 
SELECT first_name
	FROM sakila.customer
		WHERE first_name LIKE "m%" 
			ORDER BY first_name ASC;


# Testes do Banco Python
SELECT * FROM python.telefones;

#cadastro na tabela telefones
INSERT INTO python.telefones (
	telefone,
    data_alteracao,
    usuarios_id_usuario # FK - foreign key - chave estrangeira
) VALUES (
	"+55 (11) 96854-3241",
    "2024-10-08 11:21:33",
    "1"
);

INSERT INTO python.telefones (
	telefone,
    usuarios_id_usuario # FK foreign key chave estrangeira
) VALUES(
	"+55 11 98766-3654",
    "1"
);

SELECT * FROM python.telefones;
SELECT * FROM python.usuarios;
SELECT * FROM python.dados_pessoais;

# Comandos de JOINS - junção de dados de tabelas
SELECT login, telefone, id_usuario FROM python.telefones 
	INNER JOIN python.usuarios ON id_usuario;




