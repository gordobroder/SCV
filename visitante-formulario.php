<html>
	<?php include ('cabecalho.php');
		  include ('banco-partido.php');
		  include ('conecta.php');

		  $partidos = listaPartido($conexao) ?>
	<h1>Cadastro de Visitantes</h1>
	<form action="cadastra-visitante.php" method="post">
		<table class="table table-inverse">
		<tr>

			
			<td>Nome:</td>
			<td><input class="form-control" type="text" name="nome"><br/></td>
		</tr>

		<tr>
			<td>Telefone:</td>
			<td><input class="form-control" type="tel" name="telefone"><br/></td>
		</tr>

		<tr>
			<td>Cidade</td>
			<td><input class="form-control" type "text" name='cidade'><br/></td>
		</tr>
	<tr>
			
    	<tr>
    		<td>Partido</td>
    			<td>
    				<select class="form-control" name="partido_id">
        				<?php foreach($partidos as $partido) : ?>
        				<option value="<?php echo $partido['id']?>"><?php echo $partido['partido']?></option>
        				<?php endforeach ?>
        			</select>
    			</td>
		</tr>
	</tr>
		<tr>
			<td><input class="btn btn-primary" type="submit" value="Cadastrar"></td>
		</tr>

	</table>
	</form>
	

