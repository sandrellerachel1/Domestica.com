<?php

    $filecadastro = 'cadastro.csv';

    $nome = $_POST['nome'];
    $telefone = $_POST['telefone'];
    $genero = $_POST['genero'];
    $frenquencia = $_POST['frequencia'];
    $pretencao = $_POST['pretencao'];
    $cidade = $_POST['cidade'];
    $categoriadeservico = $_POST['cetegoriadeservico'];


    if (!file_exists($filecadastro)) {
        touch($filecadastro);
    }

    $data = file($filecadastro);
    $data[] = $nome . ',' . $telefone . $genero . ',' . $frequencia . ',' . $pretencao . ',' . $cidade . ',' . $categoriadeservico . ',' . "\n";
    $data_str = implode('', $data);
    file_put_contents($filecadastro, $data_str);

    header('location: list.php');

?>