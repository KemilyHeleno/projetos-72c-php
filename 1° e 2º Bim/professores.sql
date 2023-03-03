CREATE TABLE Professores (
 	codigo number(5),
	nome varchar(30),
	rg varchar(10),
	telefone char(10),
	endereco varchar(40),
	data_nascimento date,
	formacao varchar(40),
CONSTRAINT PK_PROF PRIMARY KEY (codigo));