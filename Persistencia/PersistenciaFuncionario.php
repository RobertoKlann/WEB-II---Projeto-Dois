<?php

/**
 * Classe Controladora de todas as func��es utilizadas na aplica��o.
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
     * Utilizado para buscar todos os funcion�rios cadastrados
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
     * Insere os funcion�rios.
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
     * Realiza o UPDATE no funcion�rio desejado.
     * 
     * @param type $oConexao
     * @param type $aCampos
     * @return type
     */
    public function alterarCampos($aCampos) {
        $sSql = "UPDATE funcionarios
                    SET IDFuncionario       = " . $aCampos["IDFuncionario"] . ",
                        Nome                = '" . $aCampos["Nome"] . "',
                        Sobrenome           = '" . $aCampos["Sobrenome"] . "',
                        Titulo              = '" . $aCampos["Titulo"] . "',
                        TituloCortesia      = '" . $aCampos["TituloCortesia"] . "',
                        DataNac             = '" . $aCampos["DataNac"] . "',
                        DataAdmissao        = '" . $aCampos["DataAdmissao"] . "',
                        Endereco            = '" . $aCampos["Endereco"] . "',
                        Cidade              = '" . $aCampos["Cidade"] . "',
                        Regiao              = '" . $aCampos["Regiao"] . "',
                        Cep                 = '" . $aCampos["Cep"] . "',
                        Pais                = '" . $aCampos["Pais"] . "',
                        TelefoneResidencial = '" . $aCampos["TelefoneResidencial"] . "'
                  WHERE IDFuncionario = " . $aCampos["IDFuncionario"];
        
        var_dump($sSql);
        die();
        
        return mysqli_query($this->oFuncao->getConexao(), $sSql);
    }
    
    /**
     * Realiza o DELETE do funcion�rio desejado.
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
    
    public function buscaFuncionario($iId) {
        $aFuncionario = [];
        $sSql = "
            SELECT IDFuncionario,
                   Nome,
                   Sobrenome,
                   Titulo,
                   TituloCortesia,
                   DataNac,
                   DataAdmissao,
                   Endereco,
                   Cidade,
                   Regiao,
                   Cep,
                   Pais,
                   TelefoneResidencial
              FROM funcionarios
             WHERE IDFuncionario = " . $iId;
        
        $oFuncionario = mysqli_query($this->oFuncao->getConexao(), $sSql);
        while($oLinhas = mysqli_fetch_array($oFuncionario)) {
            $aFuncionario[] = $oLinhas;
        }
        
        return $aFuncionario;
    }
    
}
