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
            <h1>Cadastro de professor</h1>
        </div>
        <div class="conteudo">
            <form action="" method="">

            <div class="informacoes">
                <label for="nome">Nome:</label>
                <input type="text" name="nome" id="nome">
            </div>

            <div class="informacoes">
                <label for="idade">Idade:</label>
                <input type="number" min="18" name="idade" id="idade">
            </div>

            <div class="informacoes">
                <label for="idade">CPF:</label>
                <input type="number" minlength="14" name="idade" id="idade" maxlength="14">
            </div>

            <div class="informacoes">
                <label for="nome">Endereço:</label>
                <input type="text" name="nome" id="nome">
            </div>

            <div class="informacoes">
                <label for="iestatus">Status:</label>
                <select>
                    <option value="AP">Ativo</option>
                    <option value="RP">Inativo</option>
                </select>
            </div>

            <div class="informacoes">
                <label for="datanascimento">Data de nascimento:</label>
                <input type="date" name="datanascimento" id="datanascimento">
            </div>

            <div class="enviar">
                <input type="submit" value="Cadastrar" name="cadastrar">
            </div>
        </form>

        

        </div>
    </div>
    
    
</body>
</html>