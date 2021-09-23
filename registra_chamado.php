<?php

//estamos trabalhando na montagem do texto
$titulo = str_replace('#', '-', $_POST['titulo']);
$categoria = str_replace('#', '-', $_POST['categoria']);
$descricao = str_replace('#', '-', $_POST['descricao']);

$texto = $titulo . '#' . $categoria . '#' . $descricao . PHP_EOL;
//implode('#', $_POST);

//Abrindo o arquivo
$arquivo = fopen('arquivo.txt', 'a');

//Escrevendo no arquivo
fwrite($arquivo, $texto);

//Fechando o arquivo
fclose($arquivo);

header('Location: abrir_chamado.php');
