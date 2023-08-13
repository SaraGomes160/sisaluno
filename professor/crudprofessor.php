<?php
require_once "../conexao.php";

if (isset($_POST['cadastrar'])) {
    $nome = $_POST["nome"];
    $idade = $_POST["idade"];
    $cpf = $_POST["cpf"];
    $datanascimento = $_POST["datanascimento"];
    $endereco = $_POST["endereco"];
    $estatus = $_POST["estatus"];

    // Validando idade negativa
    if ($idade < 0) {
        echo "<script>alert('A idade não pode ser negativa.'); window.location.replace('./cadprofessor.php');</script>";
    } else {
        // Validando status
        $validandoStatus = array("AT", "IN");
        if (!in_array($estatus, $validandoStatus)) {
            echo "<script>alert('Status inválido. Escolha entre Ativo ou Inativo'); window.location.replace('./cadprofessor.php');</script>";
        } else {
            $sql = "INSERT INTO professor (nome, cpf, idade, datanascimento, endereco, estatus)
                    VALUES (:nome, :cpf, :idade, :datanascimento, :endereco, :estatus)";

            $stmt = $conexao->prepare($sql);
            $stmt->bindParam(":nome", $nome);
            $stmt->bindParam(":cpf", $cpf);
            $stmt->bindParam(":idade", $idade);
            $stmt->bindParam(":datanascimento", $datanascimento);
            $stmt->bindParam(":endereco", $endereco);
            $stmt->bindParam(":estatus", $estatus);

            if ($stmt->execute()) {
                echo "<script>alert('Registro inserido com sucesso.'); window.location.replace('./listaprofessor.php');</script>"; 
            } else {
                echo "<script>alert('Erro ao inserir o registro.'); window.location.replace('./cadprofessor.php');</script>";
            }
        }
    }
}

if (isset($_POST['alterar'])) {
    $id = $_POST["id"]; 
    $nome = $_POST["nome"];
    $idade = $_POST["idade"];
    $cpf = $_POST["cpf"];
    $datanascimento = $_POST["datanascimento"];
    $endereco = $_POST["endereco"];
    $estatus = $_POST["estatus"];

    // Validando idade negativa
    if ($idade < 0) {
        echo "<script>alert('A idade não pode ser negativa.'); window.location.replace('./alterarprofessor.php?id=$id');</script>";
    } else {
        // Validando status
        $validandoStatus = array("AT", "IN");
        if (!in_array($estatus, $validandoStatus)) {
            echo "<script>alert('Status inválido. Escolha entre Ativo ou Inativo'); window.location.replace('./alterarprofessor.php');</script>";
        } else {
            $sql = "UPDATE professor SET nome = :nome, cpf = :cpf, idade = :idade, datanascimento = :datanascimento, endereco = :endereco, estatus = :estatus WHERE id = :id";

            $stmt = $conexao->prepare($sql);
            $stmt->bindParam(":nome", $nome);
            $stmt->bindParam(":cpf", $cpf);
            $stmt->bindParam(":idade", $idade);
            $stmt->bindParam(":datanascimento", $datanascimento);
            $stmt->bindParam(":endereco", $endereco);
            $stmt->bindParam(":estatus", $estatus);
            $stmt->bindParam(":id", $id);

            if ($stmt->execute()) {
                echo "<script>alert('Registro atualizado com sucesso.'); window.location.replace('./listaprofessor.php');</script>";
            } else {
                echo "<script>alert('Erro ao atualizar o registro.'); window.location.replace('./alterarprofessor.php?id=$id');</script>";
            }
        }
    }
}


if (isset($_GET["id"])) {
    $id = $_GET["id"];
        $sql = "DELETE FROM professor WHERE id = :id";
        $stmt = $conexao->prepare($sql);
        $stmt->bindParam(":id", $id);

        if ($stmt->execute()) {
            echo "<script>alert('Professor excluído com sucesso.'); window.location.href = './listaprofessor.php';</script>";
        } else {
            echo "<script>alert('Erro ao excluir o Professor.'); window.location.href = './listaprofessor.php';</script>";
        }
    }
?>
