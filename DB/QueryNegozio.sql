create table magazzino (
ID_magazzino int primary key auto_increment,
citta varchar(20) not null,
cap numeric (5) not null,
mq decimal (5)
);
create table utenti (
mat numeric (10) primary key,
nome varchar (50) not null,
cognome varchar (50) not null,
unique(nome,cognome)
);
create table sede(
ID_sede int primary key auto_increment,
citta varchar(50) not null,
via varchar(50) not null,
cap numeric(5) not null,
id_magazzino int references magazzino(ID_magazzino)
);
create table frequentazione(
id_sede int references sede (ID_sede),
mat_utenti numeric(10) references utenti(mat)
);
create table telefono(
telefono numeric (13) primary key,
id_sede int references sede (ID_sede)
);