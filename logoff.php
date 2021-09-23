<?php

session_start();

//Remover índices do array de sessão
//unset() serve para todo array

//Destruir a variável de sessão
//session_destroy()

session_destroy();
//forçar um redirecionamento
//redireciona para index.php
header('Location: index.php');
