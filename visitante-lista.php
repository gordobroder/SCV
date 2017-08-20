<?php   include ("cabecalho.php"); 
 		include ("conecta.php");
 		include("banco-visitante.php");
        include("banco-partido.php");
?>



<table class="table table-striped table-inverse">
	<?php if(array_key_exists("removido", $_GET) && $_GET['removido']=='true') { ?>
<p class="alert-success">Visitante apagado com sucesso.</p>
<?php } ?>
    <tr>
        <td><h4>Nome</h4></td>
        <td><h4>Telefone</h4></td>
        <td><h4>Cidade</h4></td>
        <td><h4>Partido</h4></td>
    </tr>
<?php
$vereadores = listaVisitantes($conexao);
foreach($vereadores as $vereador) {
?>

    <tr>
        <td><?= $vereador['nome'] ?></td>
        <td><?= $vereador['telefone'] ?></td>
        <td><?= $vereador['cidade'] ?></td>
        <td><?= $vereador['partido_nome'] ?></td>
        <td><a class="btn btn-primary" href="visitante-altera-formulario.php?id=<?=$vereador['id']?>">Alterar</a>

        <td>
        	<form action ="remove-visitante.php?id=<?=$vereador['id']?>" method="post">
        		<input type="hidden" name="id" value="<?=$vereador['id']?>" />
               	<button class="btn btn-danger">Remover</a>
            </form>
        </td>
    </tr>

<?php
}
?>
</table>



<?php include("rodape.php") ?>

