ALTER TABLE Iscrizione
ADD voto DECIMAL(4,1);

SELECT c.nome AS corso, AVG(i.voto) AS voto_medio
FROM Iscrizione AS i
JOIN Corso AS c ON c.id = i.ID_Corso
GROUP BY c.nome;

