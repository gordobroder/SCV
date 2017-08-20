<?php 
include("cabecalho.php");
include("conecta.php");
include("banco-visitante.php");

$id = $_POST['id'];
removeVisitante($conexao, $id);
header("Location: visitante-lista.php?removido=true");
?>

<p class="text-success">Cadastro removido!</p>

<?php
include("rodape.php");
?>