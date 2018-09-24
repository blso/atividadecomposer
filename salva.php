<?php 
session_start();


$nome = $_POST["nome"];
$idade = $_POST["idade"];

$arraydata = explode('-', $idade);
$dataformatada = $arraydata[2]."/".$arraydata[1]."/".$arraydata[0];

$_SESSION["pessoas"][] = [$nome, $dataformatada];

header("Location:index.php");
 ?>
 
