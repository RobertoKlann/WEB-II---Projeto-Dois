<?php
    $sFileHeader = dirname(__DIR__) . '/header.php';
    $sFilePersBancoDados = dirname(__DIR__) . '/Persistencia/PersistenciaBancoDados.php';
    $sFilePersRegiao = dirname(__DIR__) . '/Persistencia/PersistenciaRegiao.php';
    $sFileFooter = dirname(__DIR__) . '/footer.php';
    require_once($sFileHeader);
    include_once($sFilePersBancoDados);
    include_once($sFilePersRegiao);
?>
<br>
<br>
<div class = "divFormCadFuncionarios">
    <form class = "container" action = "/Roberto/WEB-II---Projeto-Dois/Controller/ControllerRegiaoAdd.php" method = "POST">
        <div class = "divGambiarra01">
            <div class = "container">
                <div class="form-group">
                    <label for="id_regiao">Identificador da Região</label>
                    <input style="width: 100px;" type="number" class="form-control" name="IDRegiao" placeholder="Cód Reg">
                </div>
                <div class="form-group">
                    <label for="des_regiao">Descrição da Região</label>
                    <input style="width: 400px;" type="text" class="form-control" name="DescricaoRegiao" placeholder="Descrição">
                </div>
            </div>
        </div>
        <br>
        <button type="submit" class="btn btn-default">Confirmar</button>
        <a class="btn btn-default" href = "/Roberto/WEB-II---Projeto-Dois/View/ViewConsultaRegiao.php">Cancelar</a>
        <button class="btn btn-default">Limpar</button>
    </form>
</div>
<br>
<br><br>
<?php
include_once($sFileFooter);