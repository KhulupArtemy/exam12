drop database if exists db_variant12;
create database if not exists db_variant12;
use db_variant12;

create table feedbacks(
	id int primary key auto_increment,
	fullname varchar(255),
	theme varchar(255),
	phone varchar(255)
);

select * from feedbacks