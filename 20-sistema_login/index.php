<?php
    require_once 'db_connect.php';

    session_start();

    if (isset($_POST['btn-entrar'])):
        $erros = array();
        $login = mysqli_escape_string($connect, $_POST['login']);
        $senha = mysqli_escape_string($connect, $_POST['senha']);

        if (empty($login) or empty($senha)):
            $erros[] = "<li>O campo login/senha são obrigatórios</li>";
        else:
            $sql = "SELECT login FROM usuario WHERE login = '$login'";
            $resultado = mysqli_query($connect, $sql);

            if (mysqli_num_rows($resultado) > 0):
                $senha = md5($senha);
                $sql = "SELECT id, nome, login, senha FROM usuario WHERE login = '$login' AND senha = '$senha'";
                $resultado = mysqli_query($connect, $sql);

                if (mysqli_num_rows($resultado) == 1):
                    $dados = mysqli_fetch_array($resultado);
                    mysqli_close($connect);
                    $_SESSION['logado'] = true;
                    $_SESSION['id_usuario'] = $dados['id'];
                    $_SESSION['nome'] = $dados['nome'];
                    header('Location: home.php');
                else:
                    $erros[] = "<li>Senha não confere</li>";
                endif;
            else:
                $erros[] = "<li>Usuário inexistente</li>";
            endif;
        endif;
    endif;
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema Login</title>
</head>
<body>
    <h1>Login</h1>
    <?php
        if (!empty($erros)):
            foreach($erros as $erro):
                echo $erro;
            endforeach;
        endif;
    ?>
    <hr>
    <form action="" method="post">
        Login:
        <input type="text" name="login"><br>
        Senha:
        <input type="password" name="senha"><br>
        <button type="submit" name="btn-entrar">Entrar</button>
    </form>
</body>
</html>