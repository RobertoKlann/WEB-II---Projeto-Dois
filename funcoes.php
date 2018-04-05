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


        $oConsulta = mysqli_query($oConexao, $sSql);
        while($oLinhas = mysqli_fetch_array($oConsulta)){
            $aFuncionarios = $oLinhas;
        }
        
        return $aFuncionarios;
    }


?>