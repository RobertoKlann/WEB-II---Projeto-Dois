<?php
    $sFileHeader = dirname(__DIR__) . '/header.php';
    $sFilePersBancoDados = dirname(__DIR__) . '/Persistencia/PersistenciaBancoDados.php';
    $sFilePersTerritorio = dirname(__DIR__) . '/Persistencia/PersistenciaTerritorio.php';
    $sFileFooter = dirname(__DIR__) . '/footer.php';
    require_once($sFileHeader);
    include_once($sFilePersBancoDados);
    include_once($sFilePersTerritorio);
    
    $oConexao    = new PersistenciaBancoDados("localhost", "root", "", "northwind");
    $oTerritorio = new PersistenciaTerritorio($oConexao);
    
    $iId = $_POST["IDTerritorio"];
    $oTer = $oTerritorio->getTerritorioUpdate($iId);
    
?>
<br>
<br>
<div class = "divFormCadFuncionarios">
    <form m class = "container" action = "/Roberto/WEB-II---Projeto-Dois/Controller/ControllerTerritorioUpdate.php" method = "POST">
        <div class = "divGambiarra01">
            <div class = "container">
                <div class="form-group">
                    <label for="id_territorio">Identificador do Território</label>
                    <input style="width: 100px;" value="<?php echo $oTer[0]["IDTerritorio"]  ?>" type="number" class="form-control" name="IDTerritorio" placeholder="Cód Ter">
                </div>
                <div class="form-group">
                    <label for="des_territorio">Descrição do Território</label>
                    <input style="width: 400px;" value="<?php echo $oTer[0]["DescricaoTerritorio"]  ?>" type="text" class="form-control" name="DescricaoTerritorio" placeholder="Descrição">
                </div>
             </div>
        </div>
        <br>
        <button type="submit" class="btn btn-default">Confirmar</button>
        <a class="btn btn-default" href = "/Roberto/WEB-II---Projeto-Dois/View/ViewConsultaTerritorio.php">Cancelar</a>
        <button class="btn btn-default" >Limpar</button>
    </form>
</div>
<br>
<br><br>
<?php
include_once($sFileFooter);