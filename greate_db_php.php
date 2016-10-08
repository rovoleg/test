<?php 
	include_once('tools_php_pdo.php');
	$ct1='create table roles(id int not null auto_increment primary key,
		rolename varchar(20)) default charset="utf8"';

	$ct2='create table groups(id int not null auto_increment primary key,
		groupname varchar(20)) default charset="utf8"';

	$ct3='create table users(id int not null auto_increment primary key,
		username varchar(30) not null, pass varchar(255) not null, email varchar(255), 
		role_id int, foreign key(role_id) references roles(id) on delete cascade on update cascade) default charset="utf8"';

	$ct4='create table sales(id int not null auto_increment primary key,
		product varchar(50),country varchar(50),
		price int not null, group_id int,
		foreign key (group_id) references groups(id) on delete cascade, datein date, datesold date) default charset="utf8"';
	
	$ct5='create table products(id int not null auto_increment primary key,
		product varchar(50) not null, 
		group_id int, foreign key (group_id) references groups(id) on delete cascade,
		country varchar(50),
		price int not null, 
		discount int default null, 
		info varchar(1024),
		datein date)
		 default charset="utf8"';

	$ct6='create table images(id int not null auto_increment primary key,
		product_id int, foreign key (product_id) references products(id) on delete cascade on update cascade,
		path varchar(255)) default charset="utf8"';

	Tools::createTable($ct1);
	Tools::createTable($ct2);
	Tools::createTable($ct3);
	Tools::createTable($ct4);
	Tools::createTable($ct5);
	Tools::createTable($ct6);


 ?>