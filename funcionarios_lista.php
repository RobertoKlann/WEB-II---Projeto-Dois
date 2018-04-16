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
        <td>Ações</td>
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
        <td>
            <form class="btn-group" action ="form_alterar.php" method ="POST">
                <input type ="hidden" name ="id" value="<?php echo $oFuncionario["IDFuncionario"]?>">
                <input class ="btn btn-primary" type ="submit" value ="Alterar"></input>
            </form>
            <form class="btn-group" action ="funcionarios_delete.php" method ="POST">
                <input type ="hidden" name ="id" value="<?php echo $oFuncionario["IDFuncionario"]?>">
                <input class ="btn btn-primary" type ="submit" value ="Excluir"></input>
            </form>
        </td>
    </tr>

    <?php
        endforeach;
    ?>
</table>
<?php
    include_once("footer.php");
?>