<?php
include 'conn.php';  // Certifique-se de que 'conn.php' retorna a conexão como $db
include 'protecao.php';  // Verifica a proteção (como autenticação)

// Inicializa variável para evitar erros ao acessar $dados
$dados = [
    'nome' => '',
    'email' => '',
    'senha' => '',
    'id' => ''
];

// Verifica se o ID está definido na URL
if (isset($_GET['id'])) {
    $id = $_GET['id'];

    // Utiliza prepared statements para evitar SQL Injection
    $sql = "SELECT * FROM usuarios WHERE id = ?";
    $stmt = $db->prepare($sql);  // Supondo que $db seja o objeto de conexão vindo de 'conn.php'
    
    if ($stmt) {
        $stmt->bind_param('i', $id);  // 'i' significa inteiro
        $stmt->execute();
        $result = $stmt->get_result();
        
        if ($result->num_rows > 0) {
            $dados = $result->fetch_assoc();  // Corrigido o acesso a fetch_assoc()
        } else {
            echo "Usuário não encontrado.";
            exit;  // Encerra o script se o usuário não for encontrado
        }
        
        $stmt->close();  // Fecha o prepared statement
    } else {
        echo "Erro na preparação da consulta: " . $db->error;
        exit;
    }
} else {
    echo "ID do usuário não foi fornecido.";
    exit;  // Encerra o script se o ID não for fornecido
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Codigo Certo || Project full</title>
    <link rel="stylesheet" href="../CSS/perfil.css">
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
                <li><a href="criarat.php">Criar atividade</a></li>
                <li><a href="verat.php">Ver Atividade</a></li>
                <li><a href="index.php">Logout</a></li>
            </ul>
        </nav>
        <ul id="perfil">
            <li><a href="atualizar_perfil.php"><img class="active" width="60px" height="60px" src="../imgs/logo.jpeg" alt=""></a></li>
        </ul>
    </header>

    <main>
        <div class="lado1">
            <img src="../imgs/fundo.png" alt="">
        </div>

        <div class="lado2">
            <h1>Atualizar perfil</h1>
            <form action="save_perfil.php" method="post">
                <label for="nome">Nome:</label>
                <input type="text" name="nome" id="nome" value="<?= htmlspecialchars($dados['nome'], ENT_QUOTES, 'UTF-8') ?>">

                <label for="email">Email:</label>
                <input type="email" name="email" id="email" value="<?= htmlspecialchars($dados['email'], ENT_QUOTES, 'UTF-8') ?>">

                <label for="senha">Senha:</label>
                <input type="text" name="senha" id="senha" value="<?= htmlspecialchars($dados['senha'], ENT_QUOTES, 'UTF-8') ?>">
                
                <input type="hidden" name="id" value="<?= htmlspecialchars($dados['id'], ENT_QUOTES, 'UTF-8') ?>">
                <input id="button" type="submit" name="submit" value="UPDATE">
            </form>
        </div>
    </main>

    <footer>
        <p>JAIRO BUTO DEV &COPY;</p>
    </footer>
</body>

</html>
