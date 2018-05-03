<?php 
    $sFilePersBancoDados  = dirname(__DIR__).'/Persistencia/PersistenciaBancoDados.php';
    $sFilePersFuncionario = dirname(__DIR__).'/Persistencia/PersistenciaFuncionario.php';
    
    include_once($sFilePersBancoDados);
    include_once($sFilePersFuncionario);
    
    $oConexao     = new PersistenciaBancoDados("localhost", "root", "", "northwind");
    $oFuncionario = new PersistenciaFuncionario($oConexao);
   
    $aCampos = [
        "IDFuncionario"       => $_POST["IDFuncionario"],
        "Nome"                => $_POST["Nome"],
        "Sobrenome"           => $_POST["Sobrenome"],
        "Titulo"              => $_POST["Titulo"],
        "TituloCortesia"      => $_POST["TituloCortesia"],
        "DataNac"             => $_POST["DataNac"],
        "DataAdmissao"        => $_POST["DataAdmissao"],
        "Endereco"            => $_POST["Endereco"],
        "Cidade"              => $_POST["Cidade"],
        "Regiao"              => $_POST["Regiao"],
        "Cep"                 => $_POST["Cep"],
        "Pais"                => $_POST["Pais"],
        "TelefoneResidencial" => $_POST["TelefoneResidencial"]
    ];
    
    $oFunc = $oFuncionario->alterarCampos($aCampos);
    
    if(!$oFunc) {
        ?>
        <script>
        alert("Funcionário não alterado!");
        window.location.href = '/Roberto/WEB-II---Projeto-Dois/View/ViewConsultaFuncionario.php';
        </script>
        <?php 
    } else {
    ?>
        <script>
            sweetAlert("Funcionário alterado com sucesso!");
            window.location.href = '/Roberto/WEB-II---Projeto-Dois/View/ViewConsultaFuncionario.php';
        </script>
    <?php
    }
  