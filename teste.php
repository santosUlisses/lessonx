<?php

require_once "conexao.php";

$sql = "SELECT * FROM cadastrocurso";

$resultado = mysqli_query($con, $sql);

while ($row = mysqli_fetch_assoc($resultado)) {
   
    echo "<p>Curso: " . $row["nomeCurso"] . "</p>";
    echo "<p>Professor: " . $row["professor"] . "</p>";
}