<?php

    $sFilePersBancoDados = dirname(__DIR__) . '/Persistencia/PersistenciaBancoDados.php';
    $sFilePersTerritorio = dirname(__DIR__) . '/Persistencia/PersistenciaTerritorio.php';

    include_once($sFilePersBancoDados);
    include_once($sFilePersTerritorio);

    $oConexao     = new PersistenciaBancoDados("localhost", "root", "", "northwind");
    $oTerritorio  = new PersistenciaFuncionario($oConexao);
    
    $aCampos = [
        "IDTerritorio" => "IDTerritorio",
        "DescricaoTerritorio" => "DescricaoTerritorio",
        "IDRegiao" => "IDRegiao"];
    
    $bInsere = $oTerritorio->insereTerritorio();
    
    if ($bInsere) {
        ?>
        <script>
            alert("Território cadastrado com Sucesso!");
            window.location.href = '/Roberto/WEB-II---Projeto-Dois/View/ViewConsultaTerritorio.php';
        </script>

        <?php

    } else {
        ?>
        <script>
            alert("Território não cadastrado!");
            window.location.href = '/Roberto/WEB-II---Projeto-Dois/View/ViewConsultaTerritorio.php';
        </script>
        <?php

    }