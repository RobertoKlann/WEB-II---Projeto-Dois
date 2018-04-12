<?php
    include_once("header.php");
    include_once("conect.php");
    include_once("funcoes.php");

?>

<table  class ="table table-striped table-bordered">
    <tr>
        <td>Cod Func</td>
        <td>Nome Funcionárop</td>
        <td>Titulo</td>
        <td>Data Nasc</td>
        <td>Data Adm</td>
        <td>Pais</td>
        <td>Endereço</td>
        <td>Cidade</td>
    </tr>

    <?php
        $oConsulta = selectAllFuncionarios($oConexao);
        foreach($oConsulta as $oFuncionario):
    ?>

    <tr>
        <td><?= $oFuncionario["IDFuncionario"] ?></td>
        <td><?= $oFuncionario["Nome"] ?></td>
        <td><?= $oFuncionario["Titulo"] ?></td>
        <td><?= $oFuncionario["DataNac"] ?></td>
        <td><?= $oFuncionario["DataAdmissao"] ?></td>
        <td><?= $oFuncionario["Pais"] ?></td>
        <td><?= $oFuncionario["Endereco"] ?></td>
        <td><?= $oFuncionario["Cidade"] ?></td>
    </tr>

    <?php
        endforeach;
    ?>
</table>
<?php
    include_once("footer.php");
?>