<?php
    
    $sFilePersBancoDados  = dirname(__DIR__).'/Persistencia/PersistenciaBancoDados.php';
    $sFilePersRegiao      = dirname(__DIR__).'/Persistencia/PersistenciaRegiao.php';
    
    include_once($sFilePersBancoDados);
    include_once($sFilePersRegiao);
    
    $oConexao     = new PersistenciaBancoDados("localhost", "root", "", "northwind");
    $oPersRegiao  = new PersistenciaRegiao($oConexao);
    
    
