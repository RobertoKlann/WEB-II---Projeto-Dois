<?php
    include_once("header.php");
    include_once("conect.php");
    include_once("funcoes.php");

?>

<table  class ="table table-striped table-bordered">
    <tr>
        <td>Cód Func</td>
        <td>Nome Funcionário</td>
        <td>Titulo</td>
        <td>Data Nasc</td>
        <td>Data Adm</td>
        <td>Pais</td>
        <td>Endereço</td>
        <td>Cidade</td>
        <td>Foto</td>
    </tr>

    <?php
        $oConsulta = selectAllFuncionarios($oConexao);
        var_dump($oConsulta); 
        foreach($oConsulta as $oFuncionario):
    ?>

    <tr>
        <td><?= $oFuncionario[1] ?></td>
        <td><?= $oFuncionario[0] ?></td>
        <td><?= $oFuncionario[2] ?></td>
        <td><?= $oFuncionario[3] ?></td>
        <td><?= $oFuncionario[4] ?></td>
        <td><?= $oFuncionario[5] ?></td>
        <td><?= $oFuncionario[6] ?></td>
        <td><?= $oFuncionario[7] ?></td>
        <td><?= $oFuncionario[8] ?></td>
    </tr>

    <?php
        endforeach;
    ?>
</table>
<?php
    include_once("footer.php");
?>