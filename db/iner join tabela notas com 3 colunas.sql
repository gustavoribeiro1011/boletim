SELECT 

Notas.NotaID,
Notas.Nota, 

Alunos.AlunoNome,
Alunos.AlunoID,

Materias.MateriaNome

FROM ((Notas

INNER JOIN Alunos
	    ON Notas.AlunoID = Alunos.AlunoID) 
        
INNER JOIN Materias
		ON Notas.MateriaID = Materias.MateriaID) 
        
        WHERE Alunos.AlunoID = 21


