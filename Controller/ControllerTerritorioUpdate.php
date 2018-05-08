<?php 
    $sFilePersBancoDados  = dirname(__DIR__).'/Persistencia/PersistenciaBancoDados.php';
    $sFilePersTerritorio  = dirname(__DIR__).'/Persistencia/PersistenciaTerritorio.php';
    
    include_once($sFilePersBancoDados);
    include_once($sFilePersTerritorio);
    
    $oConexao     = new PersistenciaBancoDados("localhost", "root", "", "northwind");
    $oTerritorio  = new PersistenciaTerritorio($oConexao);
    
    $aCampos = [
        "IDTerritorio"        => $_POST["IDTerritorio"],
        "DescricaoTerritorio" => $_POST["DescricaoTerritorio"]
    ];
    
    $bAlterar = $oTerritorio->alteraTerritorio($aCampos);
    
    if(!$bAlterar) {
        ?>
        <script>
        alert("Territorio não alterado!");
        window.location.href = '/Roberto/WEB-II---Projeto-Dois/View/ViewConsultaTerritorio.php';
        </script>
        <?php 
    } else {
    ?>
        <script>
            alert("Territorio alterado com sucesso!");
            window.location.href = '/Roberto/WEB-II---Projeto-Dois/View/ViewConsultaTerritorio.php';
        </script>
    <?php
    }