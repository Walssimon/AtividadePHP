create database if not exists dbCliente;

use dbCliente;

create table cliente (
idCliente int not null primary key,
nome varchar(100) not null,
sobrenome varchar (100) not null,
email varchar (100) not null,
cpf varchar (11) not null unique key,
sexo varchar (8) not null,
usuario varchar (20) not null,
senha varchar (20) not null,
);