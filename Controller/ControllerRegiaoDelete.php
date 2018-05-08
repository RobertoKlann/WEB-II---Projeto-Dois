<?php 
    $sFilePersBancoDados  = dirname(__DIR__).'/Persistencia/PersistenciaBancoDados.php';
    $sFilePersRegiao = dirname(__DIR__).'/Persistencia/PersistenciaRegiao.php';
    
    include_once($sFilePersBancoDados);
    include_once($sFilePersRegiao);
    
    $oConexao = new PersistenciaBancoDados("localhost", "root", "", "northwind");
    $oRegiao  = new PersistenciaRegiao($oConexao);
    
    $iId = $_POST["IDRegiao"];
    $bExclui = $oRegiao->deleteRegiao($iId);
    
    if(!$bExclui) {
        ?>
        <script>
        alert("Região não excluida!");
        window.location.href = '/Roberto/WEB-II---Projeto-Dois/View/ViewConsultaRegiao.php';
        </script>
        <?php 
    } else {
    ?>
        <script>
            alert("Região excluida com sucesso!");
            window.location.href = '/Roberto/WEB-II---Projeto-Dois/View/ViewConsultaRegiao.php';
        </script>
    <?php
    }