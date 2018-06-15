create database usurarios
default character set utf8
default collate utf8_general_ci;


create table `contratante`(
`id` int not null auto_increment,
`nome` varchar(30) not null,
`telefone` int,
`email` varchar(20) not null,
`senha` varchar(10) not null,
`estado` varchar(10) not null,
`cidade` varchar(10) not null,
`endereço` varchar(10) not null,
`bairro` varchar(10) not null,
primary key (id)
) default charset = utf8;

insert into `contratante` (`nome`,`telefone`,`email`,`senha`,`estado`,`cidade`,`endereço`,`bairro`)
values ('','','','','','','','');

select * from `contratante`;