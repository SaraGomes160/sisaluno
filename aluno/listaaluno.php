<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../estilizacao/listas.css">
    <title>Lista Aluno</title>
</head>

<body>
    <div class="topo">
        <a href="../index.html">Início</a>
        <a href="../disciplina/listadisciplina.php">Lista de disciplinas</a>
        <a href="../professor/listaprofessor.php">Lista de professores</a>
    </div>
    <table>
        <tr>
            <th>ID</th>
            <th>Nome</th>
            <th>Endereço</th>
            <th>Idade</th>
            <th>Data de nascimento</th>
            <th>Status</th>
            <th>Excluir</th>
            <th>Alterar</th>

        </tr>
        <?php

        require_once "../conexao.php";

        $sql = "SELECT * FROM aluno";
        $stmt = $conexao->prepare($sql);
        $stmt->execute();
        $alunos = $stmt->fetchAll(PDO::FETCH_ASSOC);

        foreach ($alunos as $aluno) { ?>
            <tr id="informacoes">
                <th><?php echo $aluno['id']; ?></th>
                <td><?php echo $aluno['nome']; ?></td>
                <td><?php echo $aluno['endereco']; ?></td>
                <td><?php echo $aluno['idade']; ?></td>
                <td><?php echo $aluno['datanascimento']; ?></td>
                <td><?php echo $aluno['estatus']; ?></td>
                <td><a href="./crudaluno.php?id=<?php echo $aluno['id']; ?>">Excluir</a></td>
                <td><a href="./alteraraluno.php?id=<?php echo $aluno['id']; ?>">Alterar</a></td>
            </tr>
        <?php } ?>
    </table>

</body>

</html>