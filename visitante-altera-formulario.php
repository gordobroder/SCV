<?php include("cabecalho.php"); 
include("conecta.php");
include("banco-partido.php");
include("banco-visitante.php");

$id = $_GET['id'];
$visitante = buscaVisitante($conexao, $id);
$partidos = listaPartido($conexao);
?>            
    <h1>Alterando visitante</h1>
    <form action="edita-visitante.php" method="post">
        <input type="hidden" name="id" value="<?=$visitante['id']?>">
        <table class="table">
            <tr>
                <td>Nome</td>
                <td> <input class="form-control" type="text" name="nome" value="<?=$visitante['nome']?>"></td>
            </tr>
            <tr>
                <td>Cidade</td>
                <td><input class="form-control" type="text" name="cidade" value="<?=$visitante['cidade']?>"></td>
            </tr> 
            <tr>
                <td>Telefone</td>
                <td><input  class="form-control" type="tel" name="telefone" 
                    value="<?=$visitante['telefone']?>"></td>
            </tr>           
            <tr>
                <td>Partido</td>
                <td>
                    <select name="partido_id" class="form-control">
                    <?php foreach($partidos as $partido) : 
                        $essaEhACategoria = $visitante['partido_id'] == $partido['id'];
                        $selecao = $essaEhACategoria ? "selected='selected'" : "";
                        ?>
                        <option value="<?=$partido['id']?>" <?=$selecao?>>
                                <?=$partido['partido']?>
                        </option>
                    <?php endforeach ?>
                    </select>
                </td>
            </tr>
            <tr>
                <td>
                    <button class="btn btn-primary" type="submit">Alterar</button>
                </td>
            </tr>
        </table>
    </form>
<?php include("rodape.php"); ?>