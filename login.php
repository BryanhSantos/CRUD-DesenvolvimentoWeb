<?php
require 'conexaoLogin.php';
?>
<!DOCTYPE html>
<html lang="pt">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Tela de Login</title>
<link rel="stylesheet" href="style.css">
<script>
function validarLogin(codVId, senhaFId) {
    var codV = document.getElementById(codVId).value;
    var senhaF = document.getElementById(senhaFId).value;

    // Substitua "seuCodigo" e "suaSenha" pelos valores corretos
    if(codV == "214" && senhaF == "123a") {
        window.location.href = "index2.php";
    } else {
        alert("Código de verificação ou senha incorretos!");
    }
}
</script>
</head>
<body>
<div class="log-container">
  <h2>LOGIN ALUNO</h2>

<form method="post">
      <input type="text" name="matric" placeholder="Matrícula" required>
      <input type="password" name="senhaA" placeholder="Senha" required>
      <input type="submit" value="ENTRAR">
    </form>
    <a href="cadastroCliente.php"><b>Não é cadastrado?</b> <ins>Clique aqui.</ins></a>

  </div>
  <h2 class="opa">  &nbsp;&nbsp;  </h2>
  <div class="log-container">
  <h2>LOGIN FUNCIONÁRIO</h2>

  <form onsubmit="event.preventDefault(); validarLogin('codV', 'senhaF');">
      <input type="text" id="codV" name="codV" placeholder="Código de verificação" required>
      <input type="password" id="senhaF" name="senhaF" placeholder="Senha" required>
      <input type="submit" value="ENTRAR">
    </form>
    <p class="funcionario"><b>Código de verificação:</b> 214</p>
    <p class="funcionario"><b>Senha:</b> 123a</p>
  </div>

</body>
</html>