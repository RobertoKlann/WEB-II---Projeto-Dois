<?php
    $sFileHeader         = dirname(__DIR__) . '/header.php';
    $sFilePersBancoDados = dirname(__DIR__) . '/Persistencia/PersistenciaBancoDados.php';
    $sFilePersRegiao     = dirname(__DIR__) . '/Persistencia/PersistenciaRegiao.php';
    $sFileFoote          = dirname(__DIR__) . '/footer.php';
    
    require_once($sFileHeader);
    include_once($sFilePersBancoDados);
    include_once($sFilePersRegiao);

    $oPersConexao = new PersistenciaBancoDados("localhost", "root", "", "northwind");
    $oPersRegiao  = new PersistenciaRegiao($oPersConexao);
?>

<table class ="table table-striped table-bordered">
    <tr>
        <td>Código Região</td>
        <td>Descrição da Região</td>
        <td>Ações</td>
    </tr>

    <?php
    $oConsulta = $oPersRegiao->getSqlConsultaPadrao();
    foreach ($oConsulta as $oRegiao):
        ?>

        <tr>
            <td style="width: 400px"><?= $oRegiao["IDRegiao"] ?></td>
            <td style="width: 400px"><?= $oRegiao["DescricaoRegiao"] ?></td>
            <td style="width: 300px">
                <form class="btn-group" action ="ViewManutencaoRegiaoAlterar.php" method ="POST">
                    <input type ="hidden" name ="IDRegiao" value="<?php echo $oRegiao["IDRegiao"] ?>">
                    <input class ="btn btn-primary" type ="submit" value ="Alterar"></input>
                </form>
                <form class="btn-group" action ="/Roberto/WEB-II---Projeto-Dois/Controller/ControllerRegiaoDelete.php" method ="POST">
                    <input type ="hidden" name ="IDRegiao" value="<?php echo $oRegiao["IDRegiao"] ?>">
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