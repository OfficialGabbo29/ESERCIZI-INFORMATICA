CREATE TABLE Studenti (
    matricola INT PRIMARY KEY AUTO_INCREMENT,
    nome VARCHAR(30),
    cognome VARCHAR(30),
    anno_iscrizione DATE
);

create table Corsi(
    id_Corso int PRIMARY KEY AUTO_INCREMENT,
    nome_corso VARCHAR(100),
    docente VARCHAR(100)
);

create table Iscrizioni(
    voto DECIMAL(4,1),
    matricola_Studenti int REFERENCES Studenti(matricola),
    ID_Corso int REFERENCES Corsi(id_Corso),
    PRIMARY KEY(matricola_Studenti, ID_Corso)
);

create table Esami(
    id_esame int PRIMARY KEY AUTO_INCREMENT,
    ID_Corso int REFERENCES Corsi(id_Corso),
    data_esame DATE,
    tipo_esame varchar(200)
);

SELECT c.nome AS corso, AVG(i.voto) AS voto_medio
FROM Iscrizioni AS i JOIN Corsi AS c ON c.id_Corso = i.ID_Corso
GROUP BY c.nome_corso;

SELECT s.nome, s.cognome
FROM Studenti AS s JOIN Iscrizioni AS i ON s.matricola = i.matricola_Studenti JOIN Corsi AS c ON c.id_Corso = i.ID_Corso
GROUP BY s.nome, s.cognome
HAVING COUNT(i.ID_Corso) > 1;

SELECT c.nome_corso, s.nome, s.cognome
FROM Studenti AS s JOIN Iscrizioni AS i ON s.matricola = i.matricola_Studenti JOIN Corsi AS c ON c.id_Corso = i.ID_Corso
WHERE i.voto = (
    SELECT MAX(i2.voto)
    FROM Iscrizioni AS i2
    WHERE i2.ID_Corso = i.ID_Corso
);

SELECT c.nome AS corso, AVG(i.voto) AS voto_medio
FROM Iscrizioni AS i JOIN Corsi AS c ON c.id_Corso = i.ID_Corso
GROUP BY c.nome_corso
HAVING COUNT(*) > 2;

SELECT e.data_esame, e.tipo_esame
FROM Esami AS e LEFT JOIN Iscrizioni AS i ON e.ID_Corso = i.ID_Corso
WHERE i.matricola_Studenti IS NULL;

SELECT s.nome, s.cognome, AVG(i.voto) AS media_voto
FROM Studenti AS s JOIN Iscrizioni AS i ON s.matricola = i.matricola_Studenti
GROUP BY s.matricola, s.nome, s.cognome
HAVING AVG(i.voto) = (
    SELECT MAX(media_studente)
    FROM (
        SELECT AVG(voto) AS media_studente
        FROM Iscrizioni
        GROUP BY matricola_Studenti
    ) AS subquery
)
LIMIT 1;

