<?php

  require_once "conexao.php";    
 
$sql = "SELECT * FROM cadastrocurso";         

$resultado = mysqli_query($con, $sql);

 while ($row = mysqli_fetch_assoc($resultado)) {  
   
echo "<p>ID: " . $row["idcurso"] . "</p>";     
echo "<p>Nome: " . $row["nomeCurso"] . "</p>";      
echo "<p>Email: " . $row["professor"] . "</p>";    
}