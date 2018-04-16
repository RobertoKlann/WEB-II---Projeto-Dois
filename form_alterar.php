<?php 
    include_once("conect.php");
    include_once("header.php");

?>

<div class = "divFormCadFuncionarios">
    <form class = "container" action = "add_funcionario.php" method = "POST">
        <div class = "divGambiarra01">
            <div class = "container">
                <div class="form-group">
                    <label for="id_funcionario">Identificador do Funcion�rio</label>
                    <input type="hidden" class="form-control" name="id_funcionario" placeholder="Nome">
                </div>
                <div class="form-group">
                    <label for="nome_fun">Nome do Funcion�rio</label>
                    <input type="text" class="form-control" name="nome_fun" placeholder="Nome">
                </div>
                <div class="form-group">
                    <label for="sobrenome_fun">Sobrenome</label>
                    <input type="text" class="form-control" name="sobrenome_fun" placeholder="Sobrenome">
                </div>
                <div class="form-group">
                    <label for="titulo_cortesia">Titulo</label>
                    <input type="text" class="form-control" name="titulo" placeholder="Nome do Produto">
                </div>
                <div class="form-group">
                    <label for="preco">Titulo Cortesia</label>
                    <input type="text" class="form-control" name="titulo_cortesia" placeholder="Preço do Produto">
                </div>
                <div class="form-group">
                    <label for="data_nasc">Data de Nascimento</label>
                    <input type="date" class="form-control" name="data_nasc" placeholder="Preço do Produto">
                </div>
                <div class="form-group">
                    <label for="data_adm">Data de Adminiss�o</label>
                    <input type="date" class="form-control" name="data_adm" placeholder="Preço do Produto">
                </div>
            </div>

            <div class = "container">
                <div class="form-group">
                    <label for="endereco">Endere�o</label>
                    <input type="text" class="form-control" name="endereco" placeholder="Código da Categoria">
                </div>
                <div class="form-group">
                    <label for="cidade">Cidade</label>
                    <input type="text" class="form-control" name="cidade" placeholder="Descrição do Produto">
                </div>
                <div class="form-group">
                    <label for="regiao">Região</label>
                    <input type="text" class="form-control" name="regiao" placeholder="Código do Produto">
                </div>
                <div class="form-group">
                    <label for="cep">Cep</label>
                    <input type="text" class="form-control" name="cep" placeholder="Nome do Produto">
                </div>
                <div class="form-group">
                    <label for="pais">País</label>
                    <input type="text" class="form-control" name="pais" placeholder="Preço do Produto">
                </div>
                <div class="form-group">
                    <label for="tel_residencial">Telefone Residencial</label>
                    <input type="text" class="form-control" name="tel_residencial" placeholder="Preço do Produto">
                </div>
<!--                <div class="form-group">
                    <label for="extensao">Extensão</label>
                    <input type="text" class="form-control" name="extensao" placeholder="Preço do Produto">
                </div>
                <div class="form-group">
                    <label for="exampleInputFile">Foto de Perfil</label>
                    <input type="file" id="exampleInputFile">
                </div>-->
            </div>
        </div>
        <button type="submit" class="btn btn-default">Confirmar</button>
        <a class="btn btn-default" href = "produto_lista.php">Cancelar</a>
        <button class="btn btn-default" >Limpar</button>   
    </form>
</div>

<?php
    include_once("footer.php");
?>