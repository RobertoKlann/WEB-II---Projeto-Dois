<?php

    /**
     * Método utilizado para buscar todos os funcionários cadastrados
     * 
     * return type Array[]
     */
    function selectAllFuncionarios($oConexao) {
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

        return mysqli_query($oConexao, $sSql);
    }

    function insereFuncionario($oConexao, $aCampos) {
        $sSql = "
            INSERT INTO funcionarios(IDFuncionario, Sobrenome, Nome, Titulo, TituloCortesia, DataNac, DataAdmissao, Endereco, Cidade, Regiao, Cep, Pais, TelefoneResidencial)
                 VALUES(" . $aCampos["id_funcionario"]. ",'" . $aCampos["sobrenome_fun"]. "','" . $aCampos["nome_fun"]. "','" . $aCampos["titulo"]. "','". $aCampos["titulo_cortesia"]. "','" . $aCampos["data_nasc"]. "','"
                . $aCampos["data_adm"]. "','" . $aCampos["endereco"]. "','" . $aCampos["cidade"]. "','" . $aCampos["regiao"]. "','" . $aCampos["cep"]. "','" . $aCampos["pais"]. "','" . $aCampos["tel_residencial"] . "')";
        
        return mysqli_query($oConexao, $sSql);
    }

?>