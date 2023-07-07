<?php
$senha = "123456";

// base64
$novaSenha = base64_encode($senha);
echo $novaSenha;
echo "<br>";
echo base64_decode($novaSenha);
echo "<hr>";

// md5
echo md5($senha);
echo "<hr>";

// sha1
echo sha1($senha);
echo "<hr>";

// password hash
$senhaSegura = password_hash($senha, PASSWORD_DEFAULT);
$senha_db = "$2y$10$8QfRAkn8hS537K.lmRbc3.1HtXjnXc.mupLJS1muAsMEdkhzP6Ky6";
if (password_verify($senha, $senha_db)):
    echo "Senha válida";
else:
    echo "Senha inválida";
endif;