<?php
// Inicia a sessão
session_start();

// Verifica se o formulário foi submetido
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Pega a matrícula e a senha do formulário
    $matric = $_POST['matric'];
    $senhaA = $_POST['senhaA'];

    // Conecta ao banco de dados
    $servername = "127.0.0.1";
    $username = "root";
    $password = "Alucard@098";
    $dbname = "escolatec";
    
    $conn = new mysqli($servername, $username, $password, $dbname);
    
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Prepara a consulta SQL
    $stmt = $conn->prepare("SELECT * FROM Clientes WHERE codigoCliente = ? AND senha = ?");
    $stmt->bind_param("ss", $matric, $senhaA);

    // Executa a consulta
    $stmt->execute();

    // Pega o resultado
    $result = $stmt->get_result();

    // Verifica se a matrícula e a senha estão corretas
    if ($result->num_rows > 0) {
        // Armazena a matrícula na sessão
        $_SESSION['matric'] = $matric;

        // Redireciona para a página index.php
        header("Location: index.php");
    } else {
        echo "<script type='text/javascript'>alert('Matrícula ou senha incorretas!');</script>";
    }

    // Fecha a conexão
    $stmt->close();
    $conn->close();
}
?>
