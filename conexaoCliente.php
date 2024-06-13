<?php
$servername = "127.0.0.1";
$username = "root";
$password = "Alucard@098";
$dbname = "escolatec";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$nomeAluno = isset($_POST['nomeAluno']) ? $_POST['nomeAluno'] : '';
$dataNascimento = isset($_POST['dataNascimento']) ? $_POST['dataNascimento'] : '';
$cpf = isset($_POST['cpf']) ? $_POST['cpf'] : '';
$email = isset($_POST['email']) ? $_POST['email'] : '';
$telefone = isset($_POST['telefone']) ? $_POST['telefone'] : '';
$senha = isset($_POST['senha']) ? $_POST['senha'] : '';

if ($senha !== '') {
   
    $stmt = $conn->prepare("INSERT INTO Clientes (nomeCliente, dataNascimento, cpf, email, telefone, senha) VALUES (?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("ssssss", $nomeAluno, $dataNascimento, $cpf, $email, $telefone, $senha);

    if ($stmt->execute()) {
        $result = $conn->query("SELECT MAX(codigoCliente) AS maxCodigo FROM Clientes");
        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();
            echo "<script type='text/javascript'>alert('Dados salvos com sucesso! \\n Sua matrícula é: " . $row['maxCodigo'] . "');</script>";
        }
    } else {
        echo "Error: " . $stmt->error;
    }

    $stmt->close();
} else {
    echo "";
}

$conn->close();
?>










