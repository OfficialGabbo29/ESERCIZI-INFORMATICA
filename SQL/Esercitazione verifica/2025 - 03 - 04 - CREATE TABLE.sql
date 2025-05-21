create table STUDENTI(
	ID_studente int primary key auto_increment,
    nome varchar(50),
    cognome varchar(50),
    email varchar(500) unique,
    data_nascita date not null
);
create table CORSI(
	ID_corso int primary key auto_increment,
    nome_corso varchar(50) UNIQUE,
    cfu int,
    check(cfu > 0)
);
create table ISCRIZIONI(
	id_studente int references STUDENTI(ID_studente),
    id_corso int references CORSI(ID_corso),
    data_iscrizione DATETIME DEFAULT(CURRENT_DATE)
);