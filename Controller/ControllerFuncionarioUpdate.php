<?php
    
    include_once("conect.php");
    include_once("funcoes.php");
    
    $aCampos = [
        "id_funcionario"  => "id_funcionario",
        "nome_fun"        => "nome_fun",
        "sobrenome_fun"   => "sobrenome_fun",
        "titulo"          => "titulo",
        "titulo_cortesia" => "titulo_cortesia",
        "data_nasc"       => "data_nasc",
        "data_adm"        => "data_adm",
        "endereco"        => "endereco",
        "cidade"          => "cidade",
        "regiao"          => "regiao",
        "cep"             => "cep",
        "pais"            => "pais",
        "tel_residencial" => "tel_residencial"
    ];
    
    $bAlterar = alterarCampos($oConexao, $aCampos);
    
    if($bAlterar) {
        
    }