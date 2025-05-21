-- esercizio 1
select * 
	from STUDENTI;
-- esercizio 2
Select * 
	from CORSI 
    WHERE cfu > 6;
-- esercizio 3
SELECT *
	FROM STUDENTI
	INNER JOIN ISCRIZIONI ON STUDENTI.ID_studente = ISCRIZIONI.id_studente
	INNER JOIN CORSI ON ISCRIZIONI.id_corso = CORSI.ID_corso
	WHERE CORSI.nome_corso = "Geografia";

SELECT *
	FROM STUDENTI
	INNER JOIN ISCRIZIONI ON STUDENTI.ID_studente = ISCRIZIONI.id_studente
	INNER JOIN CORSI ON ISCRIZIONI.id_corso = CORSI.ID_corso
	WHERE CORSI.nome_corso = "Informatica";

SELECT *
	FROM STUDENTI
	INNER JOIN ISCRIZIONI ON STUDENTI.ID_studente = ISCRIZIONI.id_studente
	INNER JOIN CORSI ON ISCRIZIONI.id_corso = CORSI.ID_corso
	WHERE CORSI.nome_corso = "Statistica";

-- esercizio 4
SELECT CORSI.nome_corso, COUNT(ISCRIZIONI.id_studente) as "STUDENTI ISCRITTI"
	FROM ISCRIZIONI RIGHT JOIN CORSI ON ISCRIZIONI.id_corso = CORSI.ID_corso
    GROUP BY CORSI.nome_corso;
-- esercizio 5
SELECT CORSI.nome_corso, COUNT(ISCRIZIONI.id_studente) as "STUDENTI ISCRITTI"
	FROM ISCRIZIONI 
	RIGHT JOIN CORSI ON ISCRIZIONI.id_corso = CORSI.ID_corso
	GROUP BY CORSI.nome_corso
	ORDER BY COUNT(ISCRIZIONI.id_studente) DESC
	LIMIT 1;
-- esercizio 6
SELECT nome, cognome
	FROM STUDENTI
    LEFT JOIN ISCRIZIONI ON STUDENTI.ID_studente = ISCRIZIONI.id_studente
    WHERE ISCRIZIONI.id_studente IS NULL;
-- salto esercizio 7
-- esercizio 8
SELECT *
	FROM STUDENTI
	LEFT JOIN ISCRIZIONI ON STUDENTI.ID_studente = ISCRIZIONI.id_studente
	LEFT JOIN CORSI ON ISCRIZIONI.id_corso = CORSI.ID_corso;
    
