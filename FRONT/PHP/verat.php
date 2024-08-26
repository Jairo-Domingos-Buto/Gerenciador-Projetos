<?php
include 'conn.php';
include 'protecao.php';

$id = $_SESSION['id'];

$sql = "select * from projetos where usuario_id = $id";
$sql_query = $db->query($sql);

?>
<!DOCTYPE html>
<html lang="pt">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Codigo Certo || Project full</title>
    <link rel="stylesheet" href="../CSS/verat.css">
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
                <li><a href="verat.php" class="active">Ver Atividade</a></li>
                <li><a href="index.php">Logout</a></li>
            </ul>

        </nav>
        <ul id="perfil">
            <li><a href="atualizar_perfil.php"><img width="60px" height="60px" src="../imgs/logo.jpeg" alt=""></a></li>
        </ul>
    </header>

    <main>
        <!-- inicio do loop -->
        <?php
        while ($dados_post = $sql_query->fetch_assoc()) {
        ?>
            <div class="projectos">
                <h2 class="titulo"><?= $dados_post['titulo'] ?></h2>

                <section class="descricao">
                    <p><?= $dados_post['descricao'] ?></p>
                </section>
                <section class="operacoes">
                    <button><a href="edit_projeto.php?id=<?= $dados_post['id'] ?>">EDITAR</a></button>
                    <button><a href="deletar_projeto.php?id=<?= $dados_post['id'] ?>">DELETAR</a></button>
                </section>
            </div>

        <?php
        }
        ?> <!-- fim do loop -->

    </main>

    <footer>
        <p>JAIRO BUTO DEV &COPY;</p>
    </footer>
</body>

</html>