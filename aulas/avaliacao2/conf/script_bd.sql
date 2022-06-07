create database avaliacao2;
use avaliacao2;
CREATE TABLE `avaliacao2`.`vendas` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `nome` VARCHAR(45) NOT NULL,
  `janeiro` DOUBLE NULL,
  `fevereiro` DOUBLE NULL,
  `marco` DOUBLE NULL,
  `abril` DOUBLE NULL,
  `maio` DOUBLE NULL,
  `junho` DOUBLE NULL,
  `julho` DOUBLE NULL,
  `agosto` DOUBLE NULL,
  `setembro` DOUBLE NULL,
  `outubro` DOUBLE NULL,
  `novembro` DOUBLE NULL,
  `dezembro` DOUBLE NULL,
  `fixo` DOUBLE NULL,
  `dataContratacao` DATE NULL,
  PRIMARY KEY (`id`));

insert into vendas (nome, janeiro,fevereiro,marco,abril,maio,junho,julho,agosto,setembro,outubro,novembro,dezembro,fixo,dataContratacao) 
values("Julia",1300,1200,1600,1500,1400,1590,1475,1036,1058,1075,2099,5090,4000,'2020-06-20');
insert into vendas (nome, janeiro,fevereiro,marco,abril,maio,junho,julho,agosto,setembro,outubro,novembro,dezembro,fixo,dataContratacao) 
values("Marcio",1500,2200,1500,1500,1400,1590,1475,1036,1058,1075,2099,5090,4000,'2020-06-20');
insert into vendas (nome, janeiro,fevereiro,marco,abril,maio,junho,julho,agosto,setembro,outubro,novembro,dezembro,fixo,dataContratacao) 
values("Fabio",1200,1700,1300,1500,1400,1590,1475,1036,1058,1075,2099,5090,4000,'2020-05-14');
insert into vendas (nome, janeiro,fevereiro,marco,abril,maio,junho,julho,agosto,setembro,outubro,novembro,dezembro,fixo,dataContratacao) 
values("Rodrigo",1600,1900,1400,1500,1400,1590,1475,1036,1058,1075,2099,5090,4000,'2020-05-14');
insert into vendas (nome, janeiro,fevereiro,marco,abril,maio,junho,julho,agosto,setembro,outubro,novembro,dezembro,fixo,dataContratacao) 
values("Eduardo",1600,1900,1400,1600,1400,1590,21475,1036,1058,1075,2099,5090,4000,'2020-05-20');

select * from vendas;