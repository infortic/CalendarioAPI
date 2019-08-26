drop database FOLGASDB;
create database FOLGASDB;

use FOLGASDB;

create table Funcionario (
cod_funcionario int primary key auto_increment not null,
nome varchar(100),
login varchar(100),
senha varchar(100)
);

CREATE TABLE agenda (
  id int(11) PRIMARY KEY NOT NULL AUTO_INCREMENT,
  title varchar(220) DEFAULT NULL,
  color varchar(10) DEFAULT NULL,
  start_event date DEFAULT NULL,
  end_event date DEFAULT NULL,
  data_agendamento timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  Id_colaborador int,
  FOREIGN KEY (Id_colaborador)  REFERENCES Funcionario(cod_funcionario)
) ;



insert into Funcionario(nome,login,senha) values("cleiton","cleiton","cleiton");
insert into agenda(title,start_event,Id_colaborador) values("cleiton","2019-08-07",1);





select * from agenda;


