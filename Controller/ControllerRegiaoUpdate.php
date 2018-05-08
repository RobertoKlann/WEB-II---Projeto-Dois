<?php 
    $sFilePersBancoDados  = dirname(__DIR__).'/Persistencia/PersistenciaBancoDados.php';
    $sFilePersRegiao = dirname(__DIR__).'/Persistencia/PersistenciaRegiao.php';
    
    include_once($sFilePersBancoDados);
    include_once($sFilePersRegiao);
    
    $oConexao = new PersistenciaBancoDados("localhost", "root", "", "northwind");
    $oRegiao  = new PersistenciaRegiao($oConexao);
    
    $aCampos = [
        "IDRegiao"        => $_POST["IDRegiao"],
        "DescricaoRegiao" => $_POST["DescricaoRegiao"]
    ];
    
    $bAlterar = $oRegiao->alteraRegiao($aCampos);
    
    if(!$bAlterar) {
        ?>
        <script>
        alert("Região não alterada!");
        window.location.href = '/Roberto/WEB-II---Projeto-Dois/View/ViewConsultaRegiao.php';
        </script>
        <?php 
    } else {
    ?>
        <script>
            alert("Região alterada com sucesso!");
            window.location.href = '/Roberto/WEB-II---Projeto-Dois/View/ViewConsultaRegiao.php';
        </script>
    <?php
    }