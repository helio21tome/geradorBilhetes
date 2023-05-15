/*Create database transporte;*/
/*use transporte;*/
Create table Cliente(
	id integer auto_increment primary key not null,
	nome_completo varchar(50) not null,
	partida varchar(30) not null,
	chegada varchar(30) not null,
	numero_pessoal varchar(10) not null,
	numero_familiar varchar(10) not null,
	periodo_partida varchar (5) not null,
	pago varchar(3) not null
)
