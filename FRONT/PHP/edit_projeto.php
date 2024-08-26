<?php
include 'protecao.php';
include 'conn.php';

if (isset($_GET['id'])) {

    $id_projecto = $_GET['id'];

    $sql = "select * from projetos where id=$id_projecto";
    $sql_query = $db->query($sql);

    if ($sql_query->num_rows == 1) {
        $dados_post = $sql_query->fetch_assoc();
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
            <form action="save_edit_projet.php" method="post">

                <label for="titulo">Titulo:</label>

                <input type="text" name="titulo" id="titulo" value="<?= $dados_post['titulo'] ?>">

                <label for="descricao">Descrição:</label>

                <textarea name="descricao" id="descricao"><?= $dados_post['descricao'] ?>"</textarea>
                <input type="hidden" name="id_projecto" value="<?=$dados_post['id']?>">

                <button name="submit" type="submit">Atualizar Atividade</button>
            </form>

        </div>
    </main>

    <footer>
        <p>JAIRO BUTO DEV &COPY;</p>
    </footer>
</body>

</html>