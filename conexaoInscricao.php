<?php
// Conexão com o banco de dados (substitua pelos seus dados)
$servername = "127.0.0.1";
$username = "root";
$password = "Alucard@098";
$dbname = "escolatec";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Dados do formulário

$codigoCurso = isset($_POST['codigoC']) ? $_POST['codigoC'] : '';
$matriculaAluno = isset($_POST['matAluno']) ? $_POST['matAluno'] : '';

// Verifica se o curso existe
$sqlVerificaCurso = "SELECT * FROM Cursos WHERE codigoCurso = '$codigoCurso'";
$resultCurso = $conn->query($sqlVerificaCurso);

// Verifica se o aluno existe
$sqlVerificaAluno = "SELECT * FROM Clientes WHERE codigoCliente = '$matriculaAluno'";
$resultAluno = $conn->query($sqlVerificaAluno);

if ($resultCurso->num_rows > 0 && $resultAluno->num_rows > 0) {
    // Verifica se o aluno já está inscrito no curso
    $sqlVerifica = "SELECT * FROM Inscricao WHERE codigoCurso = '$codigoCurso' AND codigoCliente = '$matriculaAluno'";
    $result = $conn->query($sqlVerifica);

    if ($result->num_rows > 0) {
        echo "<script type='text/javascript'>alert('Aluno já está inscrito neste curso.');</script>";
    } else {
        // Inserção na tabela Inscricao com a data atual
        $sql = "INSERT INTO Inscricao (data, codigoCurso, codigoCliente) VALUES (NOW(), '$codigoCurso', '$matriculaAluno')";

        if ($conn->query($sql) === TRUE) {
            echo "<script type='text/javascript'>alert('Inscrição realizada com sucesso!');</script>";
        } else {
            echo "Erro ao inserir inscrição: " . $conn->error;
        }
    }
} else {
    echo "";
}

$conn->close();
?>
