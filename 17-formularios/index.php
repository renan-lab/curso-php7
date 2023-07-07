<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
</head>
<body>
    <?php
        if (isset($_POST['enviar-formulario'])):
            $erros = array();
            /* Validação
            if (!$idade = filter_input(INPUT_POST, 'idade', FILTER_VALIDATE_INT)):
                $erros[] = "Idade precisa ser um inteiro";
            endif;
            if (!$email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL)):
                $erros[] = "Email inválido";
            endif;
            if (!$peso = filter_input(INPUT_POST, 'peso', FILTER_VALIDATE_FLOAT)):
                $erros[] = "Peso precisa ser um float";
            endif;
            if (!$ip = filter_input(INPUT_POST, 'ip', FILTER_VALIDATE_IP)):
                $erros[] = "IP inválido";
            endif;
            if (!$url = filter_input(INPUT_POST, 'url', FILTER_VALIDATE_URL)):
                $erros[] = "URL inválida";
            endif;*/

            // Sanitize
            $nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_SPECIAL_CHARS);

            $idade = filter_input(INPUT_POST, 'idade', FILTER_SANITIZE_NUMBER_INT);
            if (!filter_var($idade, FILTER_VALIDATE_INT)):
                $erros[] = "Idade precisa ser um inteiro";
            endif;

            $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
            if (!filter_var($email, FILTER_VALIDATE_EMAIL)):
                $erros[] = "Email inválido";
            endif;

            $url = filter_input(INPUT_POST, 'url', FILTER_SANITIZE_URL);
            if (!filter_var($url, FILTER_VALIDATE_URL)):
                $erros[] = "URL inválida";
            endif;
            

            if (!empty($erros)):
                foreach ($erros as $erro):
                    echo "<li>$erro</li>";
                endforeach;
            else:
                echo "Dados corretos";
            endif;
        endif;
    ?>

    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
        Nome:
        <input type="text" name="nome"><br>
        Idade:
        <input type="text" name="idade"><br>
        Email:
        <input type="text" name="email"><br>
        <!--Peso:
        <input type="text" name="peso"><br>
        IP:
        <input type="text" name="ip"><br>-->
        URL:
        <input type="text" name="url"><br>
        <button type="submit" name="enviar-formulario">Enviar</button>
    </form>
</body>
</html>