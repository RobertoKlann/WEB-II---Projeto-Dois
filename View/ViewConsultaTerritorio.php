<?php
$sFileHeader = dirname(__DIR__) . '/header.php';
$sFilePersBancoDados = dirname(__DIR__) . '/Persistencia/PersistenciaBancoDados.php';
$sFilePersTerritorio = dirname(__DIR__) . '/Persistencia/PersistenciaTerritorio.php';
$sFileFoote = dirname(__DIR__) . '/footer.php';
require_once($sFileHeader);
include_once($sFilePersBancoDados);
include_once($sFilePersTerritorio);

$oPersConexao = new PersistenciaBancoDados("localhost", "root", "", "northwind");
$oPersTerritorio = new PersistenciaTerritorio($oPersConexao);
?>

<table  class ="table table-striped table-bordered">
    <tr>
        <td>Código Território</td>
        <td>Descrição do Território</td>
        <td>Ações</td>
    </tr>

    <?php
    $oConsulta = $oPersTerritorio->getSqlPadraoConsulta();
    foreach ($oConsulta as $oTerritorio):
        ?>

        <tr>
            <td style="width: 400px"><?= $oTerritorio["IDTerritorio"] ?></td>
            <td style="width: 400px"><?= $oTerritorio["DescricaoTerritorio"] ?></td>
            <td style="width: 250px">
                <form class="btn-group" action ="ViewManutencaoTerritorioAlterar.php" method ="POST">
                    <input type ="hidden" name ="IDRegiao" value="<?php echo $oTerritorio["IDTerritorio"] ?>">
                    <input class ="btn btn-primary" type ="submit" value ="Alterar"></input>
                </form>
                <form class="btn-group" action ="/Roberto/WEB-II---Projeto-Dois/Controller/ControllerTerritorioDelete.php" method ="POST">
                    <input type ="hidden" name ="IDRegiao" value="<?php echo $oTerritorio["IDTerritorio"] ?>">
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