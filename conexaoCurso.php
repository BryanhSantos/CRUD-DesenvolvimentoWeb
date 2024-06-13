<?php
$servername = "127.0.0.1";
$username = "root";
$password = "Alucard@098";
$dbname = "escolatec";

// Cria conexão
$conn = new mysqli($servername, $username, $password, $dbname);

// Verifica conexão
if ($conn->connect_error) {
  die("Conexão falhou: " . $conn->connect_error);
}

$nomeCurso = isset($_POST['nomeCur']) ? $_POST['nomeCur'] : '';
$descricao = isset($_POST['desc']) ? $_POST['desc'] : '';
$cargaHoraria = isset($_POST['cargaH']) ? $_POST['cargaH'] : NULL;

// Verifica se cargaHoraria é uma string vazia
if($cargaHoraria === '') {
    $cargaHoraria = NULL;
}

$sql = "INSERT INTO Cursos (nomeCurso, descricao, cargaHoraria)
VALUES (?, ?, ?)";

$stmt = $conn->prepare($sql);
$stmt->bind_param("ssi", $nomeCurso, $descricao, $cargaHoraria);

if ($stmt->execute()) {
  echo "<script type='text/javascript'>alert('Novo registro criado com sucesso');</script>";
} else {
  echo "Erro: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>

