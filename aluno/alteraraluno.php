<?php

$id = $_GET["id"];

require_once "../conexao.php";
$stmt = $conexao->prepare("SELECT * FROM aluno WHERE id = :id");
$stmt->bindParam(':id', $id);
$stmt->execute();
$aluno = $stmt->fetch(PDO::FETCH_ASSOC);

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../estilizacao/cadastro.css">
    <title>Alterar_aluno</title>

</head>
<body>
    <div class="topo">
        <a href="../index.html">Início</a>
        <a href="../professor/cadprofessor.php">Cadastrar professor</a>
        <a href="../disciplina/caddisciplina.php">Cadastrar disciplina</a>
    </div>
    <div class="formulario">
        <div class="titulo">
            <h1>Alterar o aluno:</h1>
        </div>
        <div class="conteudo">
        <form action="./crudaluno.php" method="POST">
        <input type="hidden" name="id" value="<?php echo $aluno['id']; ?>">
            <div class="informacoes">
                <label for="nome">Nome:</label>
                <input type="text" name="nome" id="nome" value="<?php echo $aluno['nome']; ?>">
            </div>

            <div class="informacoes">
                <label for="idade">Idade:</label>
                <input type="number" name="idade" id="idade" value="<?php echo $aluno['idade']; ?>">
            </div>
            <div class="informacoes">
                <label for="nome">Endereço:</label>
                <input type="text" name="endereco" id="nome" value="<?php echo $aluno['endereco']; ?>">
            </div>

            <div class="informacoes">
                <label for="iestatus">Status:</label>
                <select name="estatus">
                    <option value="<?php echo $aluno['estatus']; ?>"><?php echo $aluno['estatus']; ?></option>
                    <option value="AP">Aprovado</option>
                    <option value="RP">Reprovado</option>
                    <option value="TP">Trancado</option>
                </select>
            </div>
            <div class="informacoes">
                <label for="datanascimento">Data de nascimento:</label>
                <input type="date" name="datanascimento" id="datanascimento" value="<?php echo $aluno['datanascimento']; ?>">

            </div>
            <div class="enviar">
                <input type="submit" value="Alterar" name="alterar">
            </div>
        </form>

        

        </div>
    </div>
    
    
</body>
</html>