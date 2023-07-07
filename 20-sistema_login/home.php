<?php
    session_start();

    if (!isset($_SESSION['logado'])):
        header('Location: index.php');
    endif;
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
</head>
<body>
    <h1>Olá <?php echo $_SESSION['nome'] ?></h1>
    <a href="logout.php">Sair</a>
</body>
</html>