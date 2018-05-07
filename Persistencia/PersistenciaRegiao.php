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
    
    public function deleteRegiao() {
        
    }
    
    public function alteraRegiao() {
        
    }
    
    public function getSqlConsultaPadrao() {
        $sSql = "
            SELECT *
              FROM regiao";
        
        return mysqli_query($this->oRegiao->getConexao(), $sSql);
    }
    
}