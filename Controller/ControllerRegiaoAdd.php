<?php
    
    $sFilePersBancoDados  = dirname(__DIR__).'/Persistencia/PersistenciaBancoDados.php';
    $sFilePersRegiao      = dirname(__DIR__).'/Persistencia/PersistenciaRegiao.php';
    
    include_once($sFilePersBancoDados);
    include_once($sFilePersRegiao);
    
    $oConexao     = new PersistenciaBancoDados("localhost", "root", "", "northwind");
    $oPersRegiao  = new PersistenciaRegiao($oConexao);
    
    $aCampos = [
        "IDRegiao"        => $_POST["IDRegiao"],
        "DescricaoRegiao" => $_POST["DescricaoRegiao"]];
    
    $bInsere = $oPersRegiao->addRegiao($aCampos);
    
    if ($bInsere) {
        ?>
        <script>
            alert("Região cadastrada com Sucesso!");
            window.location.href = '/Roberto/WEB-II---Projeto-Dois/View/ViewConsultaRegiao.php';
        </script>

        <?php

    } else {
        ?>
        <script>
            alert("Região não cadastrada!");
            window.location.href = '/Roberto/WEB-II---Projeto-Dois/View/ViewConsultaRegiao.php';
        </script>
        <?php

    }
