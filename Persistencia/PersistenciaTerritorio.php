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
    
    public function alteraTerritorio($aCampos) {
        $aTerritorio = [];
        $sSql = "
            UPDATE territorios
               SET IDTerritorio        = " . $aCampos["IDTerritorio"] . ",
                   DescricaoTerritorio = '" . $aCampos["DescricaoTerritorio"] ."'
             WHERE IDTerritorio = " .$aCampos["IDTerritorio"];
        
        return mysqli_query($this->oTerritorio->getConexao(), $sSql);
    }
    
    public function getSqlPadraoConsulta() {
        $sSql = "
            SELECT *
              FROM territorios
              JOIN regiao
             USING (IDRegiao)";
        
        return mysqli_query($this->oTerritorio->getConexao(), $sSql);
    }
    
    public function getTerritorioUpdate($iId) {
        $aCampos = [];
        $sSql = "
            SELECT *
              FROM territorios
             JOIN regiao
            USING(IDRegiao)
            WHERE IDTerritorio =" .$iId;
        
        $oTerritorio = mysqli_query($this->oTerritorio->getConexao(), $sSql);
        while($oLinhas = mysqli_fetch_array($oTerritorio)) {
            $aCampos[] = $oLinhas;
        }
        
        return $aCampos;
    }
    
}