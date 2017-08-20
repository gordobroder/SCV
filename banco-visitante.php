<?php
function listaVisitantes($conexao) {
    $vereadores = array();
    $resultado = mysqli_query($conexao, "select v.*, p.partido as partido_nome from vereadores as v join partidos as p on v.partido_id = p.id");
    while($vereador = mysqli_fetch_assoc($resultado)) {
        array_push($vereadores, $vereador);
    }

    return $vereadores;
    


}

function insereVisitante($conexao, $nome, $cidade, $telefone,  $partido_id) {
    $query = "insert into vereadores (nome, cidade, telefone, partido_id) values ('{$nome}', '{$cidade}', '{$telefone}', {$partido_id})";
    $resultadoDaInsercao = mysqli_query($conexao, $query);
    return $resultadoDaInsercao;
}

function buscaVisitante($conexao, $id) {
    $query = "select * from vereadores where id = {$id}";
    $resultado = mysqli_query($conexao, $query);
    return mysqli_fetch_assoc($resultado);
}

function removeVisitante($conexao, $id) {
	$query= "delete from vereadores where id = {$id}";
	return mysqli_query($conexao, $query);
}

function alteraVisitante($conexao, $nome, $cidade, $telefone, $partido_id, $id) {
    $query = "update vereadores set nome = '{$nome}', cidade = '{$cidade}', telefone = '{$telefone}', partido_id = '{$partido_id}'
    where id = {$id}";
    return mysqli_query($conexao, $query);
}


