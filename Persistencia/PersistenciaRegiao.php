<?php

class PersistenciaRegiao {
    
    private $oRegiao;
    
    /**
     * Construtor da Classe
     * 
     * @param type $oConexao
     */
    public function __construct($oConexao) {
        $this->oRegiao = $oConexao;
    }
    
    public function addRegiao($aCampos) {
        $sSql = "
            INSERT INTO regiao(IDRegiao, DescricaoRegiao)    
                 VALUES(" . $aCampos["IDRegiao"]. ",'" . $aCampos["DescricaoRegiao"]. "')";
        
        return mysqli_query($this->oRegiao->getConexao(), $sSql);
    }
    
    public function deleteRegiao($iId) {
        $sSql = "
            DELETE
              FROM regiao
             WHERE IDRegiao =" . $iId;
        
        return mysqli_query($this->oRegiao->getConexao(), $sSql);
    }
    
    public function alteraRegiao($aCampos) {
        $sSql = "
            UPDATE regiao
               SET IDRegiao        = " . $aCampos["IDRegiao"] . ",
                   DescricaoRegiao = '" . $aCampos["DescricaoRegiao"] . "'
             WHERE IDRegiao = " . $aCampos["IDRegiao"];
        
        return mysqli_query($this->oRegiao->getConexao(), $sSql);
    }
    
    public function getRegiaoUpdate($iId) {
        $aRegiao = [];
        $sSql = "
            SELECT *
              FROM regiao
             WHERE IDRegiao = " . $iId;
        
        $oRegiao = mysqli_query($this->oRegiao->getConexao(), $sSql);
        while($oLinhas = mysqli_fetch_array($oRegiao)) {
            $aRegiao[] = $oLinhas;
        }
        
        return $aRegiao;
    }
    
    public function getSqlConsultaPadrao() {
        $sSql = "
            SELECT *
              FROM regiao";
        
        return mysqli_query($this->oRegiao->getConexao(), $sSql);
    }
    
}