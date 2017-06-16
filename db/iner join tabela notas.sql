SELECT Notas.NotaID, Alunos.AlunoNome, Materias.MateriaNome
FROM ((Notas
INNER JOIN Alunos ON Notas.AlunoID = Alunos.AlunoID)
INNER JOIN Materias ON Notas.MateriaID = Materias.MateriaID);