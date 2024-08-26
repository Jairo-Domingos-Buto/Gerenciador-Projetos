<?php
include 'conn.php';
include 'protecao.php';

if(isset($_GET['id'])){
    $id=$_GET['id'];

    $sql = "delete from projetos where id = $id";

    $sql_query = $db->query($sql);

    if($sql_query=== true){
        header("location:verat.php");
    }
}