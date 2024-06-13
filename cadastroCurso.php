<?php
require 'conexaoCurso.php';
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
                            
              <li><a href="index2.php">INÍCIO</a></li>
              <li><a href="#">CADASTRO DE CURSOS</a></li>
              <li><a href="login.php">SAIR</a></li>
          </ul>
       </nav>

      <div class="section">
    <center>
        <div class="log-container">
  <h2>CADASTRO DE CURSO</h2>

  <form method="post">
  <label for="nomeCurso">Nome do Curso:</label><br>
            <input type="text" id="nomeCur" name="nomeCur"><br>

            <label for="desc">Descrição:</label><br>
            <input type="text" id="desc" name="desc"><br>

            <label for="cargaH">Carga Horária:</label><br>
            <input type="number" id="cargaH" name="cargaH"><br>

            <input type="submit" value="Cadastrar Curso" id="cadastrar">
    </form>
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