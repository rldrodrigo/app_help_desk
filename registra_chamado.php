<?php
session_start();

//estamos trabalhando na montagem do texto
$titulo = str_replace('#', '-', $_POST['titulo']);
$categoria = str_replace('#', '-', $_POST['categoria']);
$descricao = str_replace('#', '-', $_POST['descricao']);

$texto = $_SESSION['id'] . '#' . $titulo . '#' . $categoria . '#' . $descricao . PHP_EOL;
//implode('#', $_POST);

//Abrindo o arquivo
$arquivo = fopen('pasta-nao-publica/arquivo.hd', 'a');
//$arquivo = fopen('../../app_help_desk/arquivo.hd', 'a');

//Escrevendo no arquivo
fwrite($arquivo, $texto);

//Fechando o arquivo
fclose($arquivo);

header('Location: abrir_chamado.php');
