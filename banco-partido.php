<?php

function listaPartido($conexao) {
    $partido = array();
    $partidos= array();
    $query = "select * from partidos";
    $resultado = mysqli_query($conexao, $query);
    while($partidos = mysqli_fetch_assoc($resultado)) {
        array_push($partido, $partidos);
    }
    return $partido;

}