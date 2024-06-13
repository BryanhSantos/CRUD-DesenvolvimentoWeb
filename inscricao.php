<?php
require 'conexaoInscricao.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Escola Tec</title>
    <link rel="stylesheet" href="style2.css">
</head>
<body>
   
   <div class="wrapper">

       <nav>
          <img src="imagem/tilogo.jpeg" class="img" alt="logo">
          <ul>
                            
              <li><a href="index.php">INÍCIO</a></li>
              <li><a href="#">INSCRIÇÃO</a></li>
              <li><a href="contato.php">CONTATO</a></li>
              <li><a href="login.php">SAIR</a></li>
          </ul>
       </nav>

      <div class="section">
    <center>
        <div class="log-container">
  <h2>INSCRIÇÃO</h2>

  <form method="post">
      <input type="text" id="matAluno" name="matAluno" placeholder="Matrícula" required>
      <input type="text" id="codigoC" name="codigoC" placeholder="Código do curso" required>
      <input type="submit" value="INSCREVER-SE">
    </form>
    <p>Deseja cancelar a inscrição?<a href="cancela.php" class="clique">Clique aqui.</a></p>
  </div>
  </center>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>    
        
   </div>
 
   <footer>
       <p>Criado por Bryan Henrique &nbsp;-&nbsp; José Luis &nbsp;-&nbsp; Marcos Renan &nbsp;-&nbsp; Matheus Gomes &nbsp;-&nbsp; Renan Soares &nbsp;-&nbsp; Victor Vasconcellos;&nbsp;&nbsp;     2024</p>
   </footer>
    
</body>
</html>
