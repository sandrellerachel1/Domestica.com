<?php
session_start();
 if (!$_SESSION['loggerd']){
     header('location:login.php');
 }
 ?>
 <!DOCTYPE html>
 <html>
 <head>
     <title></title>
 </head>
 <body>
    <h1>Cadastro</h1>
    <?php
$filecadastro = 'cadastro.csv';
$data = file($filecadastro);
for($i = 0; $i < sizeof($data); $i++ ) {
    $data[$i] = explode(',', $data[$i]);
        echo "Usuario " . ($i+1);
            echo "<a href='delete.php?id=$i'>   X   </a><br>";
            echo "<a href='edit.php?id=$i'>   EDIT  </a><br>";
            echo "Nome: " . $data[0] . "<br>";
            echo "Telefone: " . $data[1] . "<br>";
            echo "Genero: " . $data[2] . "<br>";
            echo "Frequencia: " . $data[3] . "<br>";
            echo "Pretencao: " . $data[4] . "<br>";
            echo "Categoria: " . $data[5] . "<br>";
            echo "Categoriadeservico: " . $data[6] . "<br>";
            echo "<br>";
        }
    ?>
<a href="edit.php">Cadastre-se</a> 
</body>
</html>