<?php

/**
 * Classe Controladora de todas as funcções utilizadas na aplicação.
 * 
 * @author Roberto Oswaldo Klann
 * @since  25/04/2018 
 */
class PersistenciaFuncionario {
    
    private $oFuncao;
    
    /**
     * Construtor da Classe.
     * 
     * @param type $oConexao
     */
    public function __construct($oConexao) {
        $this->oFuncao = $oConexao;
    }   
    
    /**
     * Utilizado para buscar todos os funcionários cadastrados
     * 
     * return type Array[]
     */
    public function selectAllFuncionarios() {
        $aFuncionarios = [];

        $sSql = "
            SELECT Nome,
                   IDFuncionario,
                   Titulo,
                   DataNac,
                   DataAdmissao,
                   Pais,
                   Endereco,
                   Cidade,
                   Foto
              FROM funcionarios
        ";

        return mysqli_query($this->oFuncao->getConexao(), $sSql);
    }

    /**
     * Insere os funcionários.
     * 
     * @param type $aCampos
     * @return type
     */
    public function insereFuncionario($aCampos) {
        $sSql = "
            INSERT INTO funcionarios(IDFuncionario, Sobrenome, Nome, Titulo, TituloCortesia, DataNac, DataAdmissao, Endereco, Cidade, Regiao, Cep, Pais, TelefoneResidencial)
                 VALUES(" . $aCampos["id_funcionario"]. ",'" . $aCampos["sobrenome_fun"]. "','" . $aCampos["nome_fun"]. "','" . $aCampos["titulo"]. "','". $aCampos["titulo_cortesia"]. "','" . $aCampos["data_nasc"]. "','"
                . $aCampos["data_adm"]. "','" . $aCampos["endereco"]. "','" . $aCampos["cidade"]. "','" . $aCampos["regiao"]. "','" . $aCampos["cep"]. "','" . $aCampos["pais"]. "','" . $aCampos["tel_residencial"] . "')";
        
        return mysqli_query($this->oFuncao->getConexao(), $sSql);
    }
    
    /**
     * Realiza o UPDATE no funcionário desejado.
     * 
     * @param type $oConexao
     * @param type $aCampos
     * @return type
     */
    public function alterarCampos($aCampos) {
        $sSql = "UPDATE 
                    SET
                  WHERE
                ";
        
        return mysqli_query($this->oFuncao->getConexao(), $sSql);
    }
    
    /**
     * Realiza o DELETE do funcionário desejado.
     * 
     * @param type $oConexao
     * @param type $iId
     * @return type
     */
    public function excluiDado($iId) {
        $sSql = "
                ";
        
        return mysqli_query($this->oFuncao->getConexao(),  $sSql);
    }
    
}
