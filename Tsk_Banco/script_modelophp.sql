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

CREATE TABLE produtos (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(100) NOT NULL,
    preco DECIMAL(10,2) NOT NULL,
    datacad DATETIME DEFAULT CURRENT_TIMESTAMP
);

select * from produtos;


 




