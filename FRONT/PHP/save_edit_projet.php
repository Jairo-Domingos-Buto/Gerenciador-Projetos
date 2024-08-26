<?php
include 'conn.php';
include 'protecao.php';

if(!isset($_SESSION)){
    session_start();
}

$id = $_SESSION['id'];


if (isset($_POST["submit"])) {
$id_projecto = $_POST['id_projecto'];
$titulo = $_POST["titulo"];
$descricao = $_POST["descricao"];

$sql = "update projetos set titulo = '$titulo', descricao = '$descricao', usuario_id = $id  where id = $id_projecto";       /* diferenciar os id do projecto com o do usuario em referencia, autor do post */

$resultado = mysqli_query($db, $sql);

if ($resultado === true) {
    echo "Atualizado com SUCESSO";
  
header('location:verat.php');
} else {
echo "Erro SQL";
}
}
