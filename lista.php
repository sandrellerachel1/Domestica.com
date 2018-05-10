<?php

$filename = 'dados.csv';
$data = file($filename);
for($i = 0; $i < sizeof($data); $i++ ) {
    $data[$i] = explode(',', $data[$i]);
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <br><center><h1>SEJA BEM VINDO</h1></center>
    <table cellpadding="10">
        <?php foreach ($data as $linha => $elemento): ?>
           <tr>
                <td><?= $elemento[0] ?></td><br>
                <td><?= $elemento[1] ?></td><br>
                
            </tr>
        <?php endforeach ?>
    </table>
</body>
</html>