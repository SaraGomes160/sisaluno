<?php

if (!isset($_GET["id"])) {

    header("Location: listaprofessor.php");
    exit();
}

require_once "../conexao.php";

$id = $_GET["id"];


$stmt = $conexao->prepare("SELECT * FROM professor WHERE id = :id");
$stmt->bindParam(':id', $id);
$stmt->execute();
$professor = $stmt->fetch(PDO::FETCH_ASSOC);
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../estilizacao/cadastro.css">
    <title>Document</title>

</head>
<body>
    <div class="topo">
        <a href="../index.html">Início</a>
        <a href="../aluno/cadaluno.php">Cadastrar aluno</a>
        <a href="../disciplina/caddisciplina.php">Cadastrar disciplina</a>


    </div>
    <div class="formulario">
        <div class="titulo">
            <h1>Alterar o professor</h1>
        </div>
        <div class="conteudo">
        <form action="./crudprofessor.php" method="POST">
        <input type="hidden" name="id" value="<?php echo $professor['id']; ?>">

            <div class="informacoes">
                <label for="nome">Nome:</label>
                <input type="text" name="nome" id="nome" value="<?php echo $professor['nome']; ?>">
            </div>

            <div class="informacoes">
                <label for="idade">Idade:</label>
                <input type="number" name="idade" id="idade" value="<?php echo $professor['idade']; ?>">
            </div>

            <div class="informacoes">
                <label for="idade">CPF:</label>
                <input type="number" name="cpf" id="idade" value="<?php echo $professor['cpf']; ?>">
            </div>

            <div class="informacoes">
                <label for="nome">Endereço:</label>
                <input type="text" name="endereco" id="nome" value="<?php echo $professor['endereco']; ?>" >
            </div>

            <div class="informacoes">
                <label for="iestatus">Status:</label>
                <select name="estatus">
                    <option value="<?php echo $professor['estatus']; ?>"><?php echo $professor['estatus']; ?></option>
                    <option value="AT">Ativo</option>
                    <option value="IN">Inativo</option>
                </select>
            </div>

            <div class="informacoes">
                <label for="datanascimento">Data de nascimento:</label>
                <input type="date" name="datanascimento" id="datanascimento" value="<?php echo $professor['datanascimento']; ?>">
            </div>

            <div class="enviar">
                <input type="submit" value="Alterar" name="alterar">
            </div>
        </form>

        

        </div>
    </div>
    
    
</body>
</html>