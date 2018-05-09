<?php
    $sFileHeader = dirname(__DIR__) . '/header.php';
    $sFilePersBancoDados = dirname(__DIR__) . '/Persistencia/PersistenciaBancoDados.php';
    $sFilePersFuncionario = dirname(__DIR__) . '/Persistencia/PersistenciaFuncionario.php';
    $sFileFoote = dirname(__DIR__) . '/footer.php';
    require_once($sFileHeader);
    include_once($sFilePersBancoDados);
    include_once($sFilePersFuncionario);

    $oPersConexao     = new PersistenciaBancoDados("localhost", "root", "", "northwind");
    $oPersFuncionario = new PersistenciaFuncionario($oPersConexao);
?>
<table  class ="table table-striped table-bordered">
    <tr>
        <td>Código do Território</td>
        <td>Código do Funcionário</td>
    </tr>

    <?php
    $oConsulta = $oPersFuncionario->selectFuncionarioTerritorio();
    foreach ($oConsulta as $oFuncionario):
        ?>

        <tr>
            <td><?= $oFuncionario["IDTerritorio"] ?></td>
            <td><?= $oFuncionario["IDFuncionario"] ?></td>
        </tr>

        <?php
    endforeach;
    ?>
</table>
<?php
include_once($sFileFoote);
?>