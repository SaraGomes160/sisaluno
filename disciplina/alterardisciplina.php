<?php
require_once "../conexao.php";

$stmt = $conexao->prepare("SELECT id, nome FROM professor");
$stmt->execute();
$professores = $stmt->fetchAll(PDO::FETCH_ASSOC);

if (!isset($_GET["id"])) {
    header("Location: listadisciplina.php");
    exit();
}
  
$id = $_GET["id"];

$stmt = $conexao->prepare("SELECT * FROM disciplina WHERE id = :id");
$stmt->bindParam(':id', $id);
$stmt->execute();
$disciplina = $stmt->fetch(PDO::FETCH_ASSOC);

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../estilizacao/cadastro.css">
    <title>Cadastar Disciplina</title>

</head>
<body>
    <div class="topo">
        <a href="../index.html">Início</a>
        <a href="../professor/cadprofessor.php">Cadastrar professor</a>
        <a href="../aluno/cadaluno.php">Cadastrar aluno</a>


    </div>
    <div class="formulario">
        <div class="titulo">
            <h1>Alterar a disciplina</h1>
        </div>
        <div class="conteudo">
        <form action="./cruddisiplina.php" method="POST">
        <input type="hidden" name="id" value="<?php echo $disciplina['id']; ?>">
            <div class="informacoes">
                <label for="nome">Nome:</label>
                <input type="text" name="nomedisciplina" id="nome" value="<?php echo $disciplina['nomedisciplina']; ?>">
            </div>

            <div class="informacoes">
                <label for="carga">Carga horária:</label>
                <input type="number" name="ch" id="carga" value="<?php echo $disciplina['ch']; ?>">
            </div>


            <div class="informacoes">
                <label for="semestre">Semestre:</label>
                <input type="text" name="semestre" id="semestre" value="<?php echo $disciplina['semestre']; ?>">
            </div>

            <div class="informacoes">
                <label for="iidprofessor">ID Professor:</label>
                <select name="idprofessor">
                    <?php foreach ($professores as $professor) { ?>
                        <option value="<?php echo $professor['id']; ?>"><?php echo $professor['nome']; ?></option>
                    <?php } ?>
                </select>
            </div>

            <div class="informacoes">
                <label for="nota1">Nota1:</label>
                <input type="number" name="nota1" id="nota1" value="<?php echo $disciplina['Nota1']; ?>">
            </div>

            <div class="informacoes">
                <label for="nota2">Nota2:</label>
                <input type="number" name="nota2" id="nota2" value="<?php echo $disciplina['Nota2']; ?>">
            </div>

            <div class="enviar">
                <input type="submit" value="Alterar" name="alterar">
            </div>
        </form>

        </div>
    </div>
    
    
</body>
</html>