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
            <form action="" method="">
            <div class="informacoes">
                <label for="nome">Nome:</label>
                <input type="text" name="nome" id="nome">
            </div>

            <div class="informacoes">
                <label for="carga">Carga horária:</label>
                <input type="number" min="1" name="cargahoraria" id="carga">
            </div>


            <div class="informacoes">
                <label for="semestre">Semestre:</label>
                <input type="text" name="semestre" id="semestre">
            </div>

            <div class="informacoes">
                <label for="iidprofessor">ID Professor:</label>
                <input type="number" name="idprofessor" id="iidprofessor">
            </div>

            <div class="enviar">
                <input type="submit" value="Cadastrar" name="cadastrar">
            </div>
        </form>

        

        </div>
    </div>
    
    
</body>
</html>