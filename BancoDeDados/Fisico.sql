-- Geração de Modelo físico
-- Sql ANSI 2003 - brModelo.

CREATE DATABASE SuperVizinhos

CREATE TABLE categorias (
	id VARCHAR(10) PRIMARY KEY,
	nome VARCHAR(10)
)

CREATE TABLE ocorrencias (
	id VARCHAR(10) PRIMARY KEY,
	titulo VARCHAR(10),
	descricao VARCHAR(10),
	endereco VARCHAR(10),
	cidade VARCHAR(10),
	imagem VARCHAR(10),
	bairro_id VARCHAR(10)
)

CREATE TABLE bairros (
	id VARCHAR(10) PRIMARY KEY,
	bairro VARCHAR(10),
	cidade VARCHAR(10),
	estado VARCHAR(10)
)

CREATE TABLE users (
	id BIGINT(10) PRIMARY KEY,
	nome VARCHAR(10),
	email VARCHAR(10),
	idade VARCHAR(10),
	telefone VARCHAR(10),
	password VARCHAR(10),
	endereco VARCHAR(10),
	imagem VARCHAR(10),
	cidade VARCHAR(10),
	bairro_id VARCHAR(10),
	FOREIGN KEY(bairro_id) REFERENCES bairros (id)
)

CREATE TABLE planos_de_acao (
	id BIGINT(10) PRIMARY KEY,
	titulo VARCHAR(10),
	descricao VARCHAR(10),
	categoria_id VARCHAR(10),
	bairro_id VARCHAR(10),
	FOREIGN KEY(categoria_id) REFERENCES categorias (id),
	FOREIGN KEY(bairro_id) REFERENCES bairros (id)
)

ALTER TABLE ocorrencias ADD FOREIGN KEY(bairro_id) REFERENCES bairros (id)
