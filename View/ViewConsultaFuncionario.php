<?php
$sFileHeader = dirname(__DIR__) . '/header.php';
$sFilePersBancoDados = dirname(__DIR__) . '/Persistencia/PersistenciaBancoDados.php';
$sFilePersFuncionario = dirname(__DIR__) . '/Persistencia/PersistenciaFuncionario.php';
$sFileFoote = dirname(__DIR__) . '/footer.php';
require_once($sFileHeader);
include_once($sFilePersBancoDados);
include_once($sFilePersFuncionario);

$oPersConexao = new PersistenciaBancoDados("localhost", "root", "", "northwind");
$oPersFuncionario = new PersistenciaFuncionario($oPersConexao);
?>

<table  class ="table table-striped table-bordered">
    <tr>
        <td>Cod Func</td>
        <td>Nome Funcion&aacute;rio</td>
        <td>Titulo</td>
        <td>Data Nasc</td>
        <td>Data Adm</td>
        <td>Pais</td>
        <td>Endereço</td>
        <td>Cidade</td>
        <td>Ações</td>
    </tr>

    <?php
    $oConsulta = $oPersFuncionario->selectAllFuncionarios();
    foreach ($oConsulta as $oFuncionario):
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
                <form class="btn-group" action ="ViewManutencaoFuncionarioAlterar.php" method ="POST">
                    <input type ="hidden" name ="IDFuncionario" value="<?php echo $oFuncionario["IDFuncionario"] ?>">
                    <input class ="btn btn-primary" type ="submit" value ="Alterar"></input>
                </form>
                <form class="btn-group" action ="/Roberto/WEB-II---Projeto-Dois/Controller/ControllerFuncionarioDelete.php" method ="POST">
                    <input type ="hidden" name ="IDFuncionario" value="<?php echo $oFuncionario["IDFuncionario"] ?>">
                    <input class ="btn btn-primary" type ="submit" value ="Excluir"></input>
                </form>
            </td>
        </tr>

        <?php
    endforeach;
    ?>
</table>
<?php
include_once($sFileFoote);
?>