create database usuarios;
create table contratante(
`id` int not null auto_increment,
`nome` varchar (30) not null,
`telefone` int not null,
`email` varchar (30) not null,
`senha` varchar (10) not null,
`estado` varchar (15) not null,
`cidade` varchar (15) not null,
`endereço` varchar (15) not null,
`bairro` varchar (15) not null,
primary key (id)
);

insert into `contratante` (`nome`,`telefone`,`email`,`senha`,`estado`,`cidade`,`endereço`,`bairro`)
values ('','','','','','','','');

select * from contratante;

create table trabalhador(
`id` int not null auto_increment,
`nome` varchar (30) not null,
`sexo` varchar (10) not null, 
`telefone` int not null,
`email` varchar (30) not null,
`senha` varchar (10) not null,
`contato` varchar (15) not null,
`frequencia` varchar (20) not null,
constraint primary key (id)
); 

 foreign key (id) references contratante (id);

select * from trabalhador;

