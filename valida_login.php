<?php

session_start();

$_SESSION['x'] = 'Olá turo pom?';
print_r($_SESSION['x']);

echo  $_SESSION['y'];


//variavel que verifica se autenticacao foi realizada
$usuario_autenticado = false;

//Usuários do SIstema
$usuarios_app = array(
    array('email' => 'adm@teste.com.br', 'senha' => '123456'),
    array('email' => 'user@teste.com.br', 'senha' => 'abcd'),
);

/*
    echo '<pre>';
    print_r($usuarios_app);
    echo '</pre>';
    */


foreach ($usuarios_app as $user) {
    //echo 'Usuário app: ' . $user['email'] . ' / ' . $user['senha'];
    //echo 'Usuário form: ' . $_POST['email'] . ' / ' .  $_POST['senha'];

    if ($user['email'] == $_POST['email'] &&  $user['senha'] == $_POST['senha']) {
        $usuario_autenticado = true;
    }
}

if ($usuario_autenticado) {
    echo 'Usuário Autenticado';
    $_SESSION['autenticado'] = 'SIM';
} else {
    $_SESSION['autenticado'] = 'NAO';
    header('Location: index.php?login=erro');
}
