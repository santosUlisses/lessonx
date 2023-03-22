<?php

session_start();

require_once "conexao.php";

$sql = "SELECT * FROM cadastrocurso";

$resultado = mysqli_query($con, $sql);

$rows = $resultado->fetch_all(MYSQLI_ASSOC);

$_SESSION['listaCurso']=$rows;

//echo var_dump($rows);
header('location: listaCurso.php');
