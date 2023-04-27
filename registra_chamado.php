<?php

    session_start();

    $titulo = str_replace('#', '-', $_POST['titulo']);
    $categoria = str_replace('#', '-', $_POST['categoria']);
    $descricao = str_replace('#', '-', $_POST['descricao']);
    $arquivo = fopen('./interno/arquivo.hd', 'a');

    $text = $_SESSION['id'] . "#" . $titulo . "#" . $categoria . "#" . $descricao . PHP_EOL;

    fwrite($arquivo, $text);

    fclose($arquivo);
    header('Location: consultar_chamado.php');
?>