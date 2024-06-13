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
        // Deleção na tabela Inscricao
        $sql = "UPDATE Inscricao SET dataCanc = NOW() WHERE codigoCurso = '$codigoCurso' AND codigoCliente = '$matriculaAluno'";

        if ($conn->query($sql) === TRUE) {
            echo "<script type='text/javascript'>alert('Inscrição cancelada com sucesso!');</script>";
        } else {
            echo "Erro ao excluir inscrição: " . $conn->error;
        }
    } else {
        echo "<script type='text/javascript'>alert('Aluno não está inscrito neste curso.');</script>";
    }
} else {
    echo "";
}

$conn->close();
?>
