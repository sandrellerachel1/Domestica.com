<?php

    $filecadastro = 'usuarios.csv';

    $nome = $_POST['nome'];
    $telefone = $_POST['telefone'];
    $genero = $_POST['genero'];
    $frenquencia = $_POST['frequencia'];
    $pretencao = $_POST['pretencao'];
    $cidade = $_POST['cidade'];
    $categoriadeservico = $_POST['cetegoriadeservico'];
    $linha = $_POST['linha'];

    if (!file_exists($filecadastro)) {
        touch($filecadastro);
    }

    $file = file($filecadastro);
    $data = $nome . ',' . $telefone . ',' . $genero . ',' . $frequencia
    $data[$linha] = $email . ',' . $senha . "\n";
    $data_str = implode('', $data);
    file_put_contents($filecadastro, $data_str);

    header('location: list.php');

?>