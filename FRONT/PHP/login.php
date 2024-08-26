<?php

include 'conn.php';

if (isset($_POST['submit'])) {
    $email = $_POST['email'];
    $senha = $_POST['senha'];


    $sql = "select * from usuarios where email = '$email' and senha ='$senha'";
    $sql_query = mysqli_query($db, $sql) or die("Falha no codigo SQL" . mysqli_error($db));

    if ($sql_query->num_rows == 1) {

        $dados = $sql_query->fetch_assoc();

        if (!$_SESSION) {
            session_start();
        }

        $_SESSION['id'] = $dados['id'];
        $_SESSION['nome'] = $dados['nome'];
        $_SESSION['email'] = $dados['email'];

        header("location:home.php");
    } else {
    }
}



?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Codigo Certo || Project full</title>
    <link rel="stylesheet" href="../CSS/login.css">
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
                <li><a href="login.php" class="active">LOGIN</a></li>
                <li><a href="singin.php">SING IN</a></li>
            </ul>
        </nav>
    </header>

    <main>
        <div class="lado1">
            <img src="../imgs/fundo.png" alt="">
        </div>

        <div class="lado2">
            <h1>LOGIN</h1>
            <form action="<?= $_SERVER['PHP_SELF'] ?>" method="post">

                <label for="email">Email:</label>
                <input type="email" name="email" required id="email">
                <label for="senha">Senha:</label>
                <input type="password" name="senha" required id="senha">
                <input id="button" type="submit" name="submit" value="LOGIN">
            </form>
        </div>
    </main>

    <footer>
        <p>JAIRO BUTO DEV &COPY;</p>
    </footer>
</body>

</html>