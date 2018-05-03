<?php 
    $sFilePersBancoDados  = dirname(__DIR__).'/Persistencia/PersistenciaBancoDados.php';
    $sFilePersFuncionario = dirname(__DIR__).'/Persistencia/PersistenciaFuncionario.php';
    
    include_once($sFilePersBancoDados);
    include_once($sFilePersFuncionario);
    
    $oConexao     = new PersistenciaBancoDados("localhost", "root", "", "northwind");
    $oFuncionario = new PersistenciaFuncionario($oConexao);
   
    $iId = $_POST["IDFuncionario"];
    
    $bExclui = $oFuncionario->excluiFuncionario($iId);
    
    if(!$bExclui) {
        ?>
        <script>
        alert("Funcionário não excluido!");
        window.location.href = '/Roberto/WEB-II---Projeto-Dois/View/ViewConsultaFuncionario.php';
        </script>
        <?php 
    } else {
    ?>
        <script>
            alert("Funcionário excluido com sucesso!");
            window.location.href = '/Roberto/WEB-II---Projeto-Dois/View/ViewConsultaFuncionario.php';
        </script>
    <?php
    }