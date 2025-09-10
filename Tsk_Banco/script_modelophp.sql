create database modelophp_db;
use modelophp_db;

create table usuarios(
id int auto_increment primary key not null,
nome varchar(100) not null,
email varchar(100) not null unique,
datacad timestamp not null default current_timestamp
);

insert into usuarios (nome, email, datacad)
values('Cell', 'cell@email.com', default);


select * from usuarios;



