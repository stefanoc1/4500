SELECT a.nome,a.email,c.nome,p.descricao
FROM tb_aluno AS a
INNER JOIN tb_matricula AS m
ON a.id = m.aluno_id
INNER JOIN 