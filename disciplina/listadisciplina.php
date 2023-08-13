<?php
require_once "../conexao.php";

$stmt = $conexao->prepare("SELECT * FROM disciplina");
$stmt->execute();
$disciplinas = $stmt->fetchAll(PDO::FETCH_ASSOC);

function getProfessorName($conexao, $idprofessor)
{
    $stmt = $conexao->prepare("SELECT nome FROM professor WHERE id = :id");
    $stmt->bindParam(':id', $idprofessor);
    $stmt->execute();
    $result = $stmt->fetch(PDO::FETCH_ASSOC);
    return $result['nome'];
}
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
        <a href="../disciplina/listadisciplina.php">Lista de disciplinas</a>
        <a href="../professor/listaprofessor.php">Lista de professores</a>
    </div>
    <table>
        <tr>
            <th>ID</th>
            <th>Nome</th>
            <th>Carga horária</th>
            <th>Semestre</th>
            <th>ID professor</th>
            <th>Nota 1</th>
            <th>Nota 2</th>
            <th>Media</th>
            <th>Excluir</th>
            <th>Alterar</th>

        </tr>

        <?php
        foreach ($disciplinas as $disciplina) { ?>
            <tr id="informacoes">
                <th><?php echo $disciplina['id']; ?></th>
                <td><?php echo $disciplina['nomedisciplina']; ?></td>
                <td><?php echo $disciplina['ch']; ?></td>
                <td><?php echo $disciplina['semestre']; ?></td>
                <td><?php echo getProfessorName($conexao, $disciplina['idprofessor']); ?></td>
                <td><?php echo $disciplina['Nota1']; ?></td>
                <td><?php echo $disciplina['Nota2']; ?></td>
                <td><?php echo $disciplina['Media']; ?></td>
                <td><a href="./cruddisiplina.php?id=<?php echo $disciplina['id']; ?>">Excluir</a></td>
                <td><a href="./alterardisciplina.php?id=<?php echo $disciplina['id']; ?>">Alterar</a></td>
            </tr>
        <?php } ?>

    </table>

</body>

</html>