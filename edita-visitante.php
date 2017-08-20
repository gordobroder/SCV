<?php include("cabecalho.php");         
 	  include("conecta.php");
 	  include("banco-visitante.php");
 	  include("banco-partido.php");            

$nome = $_POST['nome'];
$cidade = $_POST['cidade'];
$telefone = $_POST['telefone'];
$partido_id = $_POST['partido_id'];
$id = $_POST['id'];


if(alteraVisitante($conexao, $nome, $cidade, $telefone, $partido_id, $id)) { ?>
    <p class="text-success">O cadastro de <?= $nome ?> foi alterado.</p>
<?php } else {
    $msg = mysqli_error($conexao);
?>
    <p class="text-danger">O cadastro não foi alterado: <?= $msg?></p>
<?php
}
?>

<?php include("rodape.php"); ?>