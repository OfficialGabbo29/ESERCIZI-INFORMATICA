create table Corso(
    id int PRIMARY KEY AUTO_INCREMENT,
    nome VARCHAR(100)
);

create table Iscrizione(
    matricola_Studenti int REFERENCES Studenti(matricola),
    ID_Corso int REFERENCES Corso(id)
);

select s.nome, s.cognome, c.nome
from Studenti AS s JOIN Iscrizione AS i ON s.matricola = i.matricola_Studenti JOIN Corso AS c ON c.id = i.ID_Corso
where s.nome = "GIOVANNI" and s.cognome = "BOBBO";