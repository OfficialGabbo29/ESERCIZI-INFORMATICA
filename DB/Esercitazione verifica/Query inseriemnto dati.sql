INSERT INTO STUDENTI(nome, cognome, email, data_nascita, telefono) VALUES ("Gabriele", "Curci", "gab.curci@gmail.com", "2006-09-01", "3333653897");
INSERT INTO STUDENTI(nome, cognome, email, data_nascita, telefono) VALUES ("Laura", "Vallu", "lau.valli@gmail.com", "1940-05-14", "3736753591");
INSERT INTO STUDENTI(nome, cognome, email, data_nascita, telefono) VALUES ("Paolo", "Mandelli", "pal.mandelli@gmail.com", "2006-10-29", "3353673697");
INSERT INTO CORSI(nome_corso, cfu) VALUES ("Informatica", 50);
INSERT INTO CORSI(nome_corso, cfu) VALUES ("Statistica", 30);
INSERT INTO CORSI(nome_corso, cfu) VALUES ("Geografia", 150);
create table ISCRIZIONI(
	id_studente int references STUDENTI(ID_studente),
    id_corso int references CORSI(ID_corso),
    data_iscrizione DATETIME DEFAULT(CURRENT_DATE)
);
INSERT INTO ISCRIZIONI(id_studente, id_corso) VALUES(1,3);
INSERT INTO ISCRIZIONI(id_studente, id_corso) VALUES(3,2);
UPDATE STUDENTI SET email = "gio.polfo@gmail.com" WHERE ID_studente = 1;
DELETE FROM STUDENTI WHERE ID_studente = 2
