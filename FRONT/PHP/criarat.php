<?php
include 'protecao.php';
include 'conn.php';


if (isset($_POST["submit"])) {
    $id_user = $_SESSION['id'];
    $titulo = $_POST["titulo"];
    $descricao = $_POST["descricao"];

    $sql = "insert into projetos (titulo,descricao,usuario_id) values ('$titulo','$descricao',$id_user)";

    $resultado = mysqli_query($db, $sql);

    if ($resultado) {
        echo "criando com SUCESSO";
        header('location:verat.php');
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
    <link rel="stylesheet" href="../CSS/criarat.css">
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
                <li><a href="criarat.php" class="active">Criar atividade</a></li>
                <li><a href="verat.php">Ver Atividade</a></li>
                <li><a href="index.php">Logout</a></li>
            </ul>

        </nav>
        <ul id="perfil">
            <li><a href="atualizar_perfil.php"><img width="60px" height="60px" src="../imgs/logo.jpeg" alt=""></a></li>
        </ul>
    </header>


    <main>
        <div class="lado1">
            <h2>Criar Projecto</h2>
            <img width="660px" height="660px" src="../imgs/gestor.jpg" alt="">
        </div>

        <div class="lado2">
            <h3>Detalhes do Projecto</h3>
<!-- formulario -->
            <form action="<?= $_SERVER['PHP_SELF'] ?>" method="post">

                <label for="titulo">Titulo:</label>

               <input type="text" name="titulo" id="titulo">

                <label for="descricao">Descrição:</label>
                
                <textarea name="descricao" id="descricao"></textarea>

                <button name="submit" type="submit">Criar Atividade</button>
            </form>

        </div>
    </main>

    <footer>
        <p>JAIRO BUTO DEV &COPY;</p>
    </footer>
</body>

</html>