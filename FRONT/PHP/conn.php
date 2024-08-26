<?php

$host = "localhost";
$user = "root";
$password = "";
$DBname = "gerenciador_projetos";

$db = new mysqli($host,$user,$password,$DBname);

if(!$db){
    die("Falha na conecao com o banco");
}