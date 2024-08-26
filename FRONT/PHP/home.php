<?php
include 'conn.php';
include 'protecao.php';


?>

<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Playwrite+HU:wght@100..400&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <title>Codigo Certo || Project full</title>
    <link rel="stylesheet" href="../CSS/home.css">
</head>
<body>
    <header>
        <!-- Logo -->
        <section class="logo">
            <a href="../PHP/home.php"><img width="80px" height="80px" src="../imgs/logo.jpeg" alt=""> </a>
        </section>
        <!-- Links -->
        <nav>
            <ul class="links">
                <li><a href="criarat.php">Criar atividade</a></li>
                <li><a href="verat.php">Ver Atividade</a></li>
                <li><a href="logout.php">Logout</a></li>
            </ul>
           
        </nav>
        <ul id="perfil">
            <li><a href="atualizar_perfil.php?id=<?=$_SESSION['id'];?>"><img width="60px" height="60px" src="../imgs/logo.jpeg" alt=""></a></li>
        </ul>
    </header>

    <main>
        <div class="barra">
            <h1>Seja Bem Vindo (a) <span id="user"><?= $_SESSION['nome']?> </span></h1>
            <h1>Ao Seu Gestor de Projectos</h1>
        </div>

    </main>

    <footer>
        <p>JAIRO BUTO DEV &COPY;</p>
    </footer>
</body>
</html>