<?php
include 'conn.php';
include 'protecao.php';

if (isset($_POST['submit'])) {
$id = $_POST['id'];
$nome = $_POST['nome'];
$email = $_POST['email'];
$senha = $_POST['senha'];


$sql = "update usuarios set nome = '$nome', email = '$email', senha = '$senha' where id=$id";
$sql_query = $db->query($sql) or die("Falha no codigo SQL" . mysqli_error($db));

if ($sql_query===true) {
header("location:home.php");
} else {
echo 'Erro ao atualizar os dados';
}
}