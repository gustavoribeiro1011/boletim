SELECT Notas.NotaID, Alunos.AlunoNome
FROM Notas
INNER JOIN Alunos ON Notas.AlunoID = Alunos.AlunoID