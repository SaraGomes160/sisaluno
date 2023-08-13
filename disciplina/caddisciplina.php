<?php
require_once "../conexao.php";
$stmt = $conexao->prepare("SELECT id, nome FROM professor");
$stmt->execute();
$professores = $stmt->fetchAll(PDO::FETCH_ASSOC);
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
            <h1>Cadastro de disciplina</h1>
        </div>
        <div class="conteudo">
            <form action="./cruddisiplina.php" method="POST">
                <div class="informacoes">
                    <label for="nome">Nome:</label>
                    <input type="text" name="nomedisciplina" id="nome">
                </div>

                <div class="informacoes">
                    <label for="carga">Carga horária:</label>
                    <input type="number" name="ch" id="carga">
                </div>


                <div class="informacoes">
                    <label for="semestre">Semestre:</label>
                    <input type="text" name="semestre" id="semestre">
                </div>

                <div class="informacoes">
                    <label for="iidprofessor">ID Professor:</label>

                    <select name="idprofessor">
                        <option value="">Selecione um professor</option>
                        <?php foreach ($professores as $professor) { ?>
                            <option value="<?php echo $professor['id']; ?>"><?php echo $professor['nome']; ?></option>
                        <?php } ?>
                    </select>
                </div>

                <div class="informacoes">
                    <label for="nota1">Nota1:</label>
                    <input type="number" name="nota1" id="nota1">
                </div>

                <div class="informacoes">
                    <label for="nota2">Nota2:</label>
                    <input type="number" name="nota2" id="nota2">
                </div>

                <div class="enviar">
                    <input type="submit" value="Cadastrar" name="cadastrar">
                </div>
            </form>



        </div>
    </div>


</body>

</html>