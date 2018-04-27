<?php            

$nota1 = $_POST["matematica"];
$nota2 = $_POST["portugues"];
$nota3 = $_POST["quimica"];
$nota4 = $_POST["fisica"];
$nota5 = $_POST["geografia"];
$nota6 = $_POST["historia"];

$notas = [$nota1, $nota2, $nota3, $nota4, $nota5, $nota6];

function calculaAprovacao($nota){
    foreach($nota as $lista){
    if($lista >= 60){

        return "Aprovado";
    }else{

        return "Reprovado";
    }
    }
}


?>

<?php include "cabecalho.php"?>


<table border="1px">
    <?php foreach(calculaAprovacao($notas) as $aprovacao): ?>
    <tr>
        <th>Matemática</th>
        <td><?php echo $aprovacao[0]; ?></td>
    </tr>
    <tr>
        <th>Português</th>
        <td><?php echo $aprovacao[1]; ?></td>
    </tr>
    <tr> 
        <th>Química</th>
        <td><?php echo $aprovacao[2]; ?></td>
    </tr>

     <tr>
            <th>Física</th>
            <td><?php echo $aprovacao[3]; ?></td>
        <tr>

        <tr>
            <th>Geografia</th>
            <td><?php echo $aprovacao[4]; ?></td>
        <tr>

    <tr>
        <th>História</th>
        <td><?php echo $aprovacao[5]; ?></td>
    </tr>
        <?php endforeach; ?>
</table>


</body>
</html>