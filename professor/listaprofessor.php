<?php

require_once "../conexao.php";

$sql = "SELECT * FROM professor";
$stmt = $conexao->prepare($sql);
$stmt->execute();
$professors = $stmt->fetchAll(PDO::FETCH_ASSOC);

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../estilizacao/listas.css">
    <title>Document</title>
</head>
<body>
    <div class="topo">
        <a href="../index.html">Início</a>
        <a href="../aluno/listaaluno.php">Lista de alunos</a>
        <a href="../disciplina/listadisciplina.php">Lista de disciplinas</a>
    </div>
    <table>
        <tr>
            <th>ID</th>
            <th>Nome</th>
            <th>Endereço</th>
            <th>Idade</th>
            <th>CPF</th>
            <th>Data de nascimento</th>
            <th>Status</th>
            <th>Excluir</th>
            <th>Alterar</th>

        </tr>
        <?php foreach ($professors as $professor) { ?>
        <tr id="informacoes">
            <th><?php echo $professor['id']; ?></th>
            <td><?php echo $professor['nome']; ?></td>
            <td><?php echo $professor['endereco']; ?></td>
            <td><?php echo $professor['idade']; ?></td>
            <td><?php echo $professor['cpf']; ?></td>
            <td><?php echo $professor['datanascimento']; ?></td>
            <td><?php echo $professor['estatus']; ?></td>
            <td><a href="./crudprofessor.php?id=<?php echo $professor['id']; ?>">Excluir</a></td>
            <td><a href="./alterarprofessor.php?id=<?php echo $professor['id']; ?>">Alterar</a></td>
        </tr>
        <?php } ?>


    </table>
    
</body>
</html>