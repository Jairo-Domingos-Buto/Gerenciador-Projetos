<?php

include 'conn.php';

if (isset($_POST["submit"])) {
    $nome = $_POST["nome"];
    $email = $_POST["email"];
    $senha = $_POST["senha"];

    $sql = "insert into usuarios (nome,email,senha) values ('$nome','$email','$senha')";

    $resultado = mysqli_query($db, $sql);

    if ($resultado) {
        echo "CADASTRADO COM SUCESSO";
        header('location:login.php');
    } else {
        echo "Erro SQL";
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Codigo Certo || Project full</title>
    <link rel="stylesheet" href="../CSS/singin.css">
</head>

<body>
    <header>
        <!-- Logo -->
        <section class="logo">
            <a href="../PHP/index.php"><img width="80px" height="80px" src="../imgs/logo.jpeg" alt=""> </a>
        </section>
        <!-- Links -->
        <nav>
            <ul class="links">
                <li><a href="login.php">LOGIN</a></li>
                <li><a href="singin.php" class="active">SING IN</a></li>
            </ul>
        </nav>
    </header>

    <main>
        <div class="lado1">
            <img src="../imgs/fundo.png" alt="">
        </div>

        <div class="lado2">
            <h1>SING IN</h1>
            <form action="<?= $_SERVER['PHP_SELF'] ?>" method="post">
                <label for="nome">Nome:</label>
                <input type="text" name="nome" required id="nome">
                <label for="email">Email:</label>
                <input type="email" name="email" required id="email">
                <label for="senha">Senha:</label>
                <input type="password" name="senha" required id="senha">
                <input id="button" type="submit" name="submit" value="SING IN">
            </form>
        </div>
    </main>

    <footer>
        <p>JAIRO BUTO DEV &COPY;</p>
    </footer>
</body>

</html>