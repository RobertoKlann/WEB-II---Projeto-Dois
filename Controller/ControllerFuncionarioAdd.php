<?php

    include_once("conect.php");
    include_once("funcoes.php");
    
    $aCampos = [
        "id_funcionario"  =>  $_POST["id_funcionario"],
        "nome_fun"        => $_POST["nome_fun"],
        "sobrenome_fun"   => $_POST["sobrenome_fun"],
        "titulo"          => $_POST["titulo"],
        "titulo_cortesia" => $_POST["titulo_cortesia"],
        "data_nasc"       => $_POST["data_nasc"],
        "data_adm"        => $_POST["data_adm"],
        "endereco"        => $_POST["endereco"],
        "cidade"          => $_POST["cidade"],
        "regiao"          => $_POST["regiao"],
        "cep"             => $_POST["cep"],
        "pais"            => $_POST["pais"],
        "tel_residencial" => $_POST["tel_residencial"]
    ];
    
    $bInsersao = insereFuncionario($oConexao, $aCampos);
    
    if($bInsersao) {
?>
<script>
     alert("Funcionário cadastrado com Sucesso!");
            window.location.href = 'cadastro_funcionarios.php';
</script>

<?php
    } else {
?>
<script>
    alert("Funcionário não cadastrado!");
    window.location.href = 'cadastro_funcionarios.php';
</script>
<?php
    
    }