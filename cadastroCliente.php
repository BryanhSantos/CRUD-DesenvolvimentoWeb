<?php
require 'conexaoCliente.php';
?>
<!DOCTYPE html>
<html lang="pt">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Tela de Login</title>
<link rel="stylesheet" href="style.css">
</head>
<body>
  <div class="login-container">
    <h2>CADASTRE-SE</h2> 

    <form action="cadastroCliente.php" method="post">
            <label for="nomeAluno">Nome do Aluno:</label><br>
            <input type="text" id="nomeAluno" name="nomeAluno"><br>
            <label for="dataNascimento">Data de Nascimento:</label><br>
            <input type="date" id="dataNascimento" name="dataNascimento"><br>
            <label for="cpf">CPF:</label><br>
            <input type="text" id="cpf" name="cpf"><br>
            <label for="email">E-mail:</label><br>
            <input type="email" id="email" name="email"><br>
            <label for="telefone">Telefone:</label><br>
            <input type="tel" id="telefone" name="telefone"><br>
            <label for="matricula">Senha:</label><br>
            <input type="password" id="senha" name="senha"><br>
            <input type="submit" value="Cadastrar Aluno" id="cadastrar">
        </form>
        <a href="login.php">Voltar para a tela de login</a>
  </div>
</body>

</html>
