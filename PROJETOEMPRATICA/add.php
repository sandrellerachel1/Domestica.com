<?php

    $filecadastro = 'cadastro.csv';

    $nome = $_POST['nome'];
    $telefone = $_POST['telefone'];
    $genero = $_POST['genero'];
    $frenquencia = $_POST['frequencia'];
    $pretencao = $_POST['pretencao'];
    $cidade = $_POST['cidade'];
    $categoriadeservico = $_POST['trabalho'];


    if (!file_exists($filecadastro)) {
        touch($filecadastro);
    }

    $data = file($filecadastro); // salva os dados 
    $data[] = $nome . ',' . $telefone . $genero . ',' . $frequencia . ',' . $pretencao . ',' . $cidade . ',' . $categoriadeservico . ',' . "\n";
    $data_str = implode('', $data); // pesquisa implode php
    file_put_contents($filecadastro, $data_str); // sobrescreve o nosso arquivo por um com o novo cadastro

    header('location: list.php'); // assim que o usuario for cadastrado, quero que redirecione para a pagina do usucario

?>