<html>
<?php include("cabecalho.php"); 
 	  include("conecta.php"); 
 	  include("banco-visitante.php");
 	  include("banco-partido.php");
?>

<?php


$nome = $_POST['nome'];
$cidade= $_POST['cidade'];
$telefone= $_POST['telefone'];
$partido_id = $_POST['partido_id'];


if (insereVisitante($conexao, $nome, $cidade, $telefone, $partido_id)) {
?>
<p class="text-success">Visitante <?= $nome; ?> foi adicionado com sucesso!</p>
<?php
} else {
    $msg = mysqli_error($conexao);
?>
<p class="text-danger">O visitante <? = $nome; ?> não foi adicionado: <?= $msg ?></p>
<?php
}
?>


<?php include("rodape.php"); ?>

</html>