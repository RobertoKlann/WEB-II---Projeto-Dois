<?php

class PersistenciaTerritorio {
    
    private $oTerritorio;
    
    
    public function __construct($oConexao) {
        $this->oTerritorio = $oConexao;
    }
    
    public function insereTerritorio() {
        
    }
    
    public function deleteTerritorio() {
        
    }
    
    public function alteraTerritorio() {
        
    }
    
    public function getSqlPadraoConsulta() {
        $sSql = "
            SELECT *
              FROM territorios
              JOIN regiao
             USING (IDRegiao)";
        
        return mysqli_query($this->oTerritorio->getConexao(), $sSql);
    }
    
}