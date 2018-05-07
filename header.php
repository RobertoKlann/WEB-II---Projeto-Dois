<!DOCTYPE html>
<html lang = "pt-br">
    <head>
        <meta charset = "UTF-8">
        <title>North Wind</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
    </head>
    <!-- Header Fixo para todas as paginas -->
    <body>
        <div class ="navbar navbar-inverse navbar-fixed-top">
            <div class ="container">
                <div class ="navbar-header">
                    <a href = "/Roberto/WEB-II---Projeto-Dois/index.php" class ="navbar-brand">North Wind</a>
                </div>
                <div>
                    <ul class="nav nav-tabs">
                        <li class="nav-item dropdown">
                          <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Funcionário</a>
                          <div class="dropdown-menu">
                            <a class="dropdown-item" href="/Roberto/WEB-II---Projeto-Dois/View/ViewConsultaFuncionario.php">Consultar Funcionários</a>   
                            <a class="dropdown-item" href="/Roberto/WEB-II---Projeto-Dois/View/ViewManutencaoFuncionario.php">Cadastrar Funcionários</a>
                            <a class="dropdown-item" href="/Roberto/WEB-II---Projeto-Dois/View/ViewManutencaoFuncionario.php">Funcionário x Território</a>
                          </div>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Território</a>
                            <div class="dropdown-menu">
                                <a class="nav-link disabled" href="/Roberto/WEB-II---Projeto-Dois/View/ViewConsultaTerritorio.php">Consultar Território</a>
                                <a class="nav-link disabled" href="/Roberto/WEB-II---Projeto-Dois/View/ViewManutencaoTerritorio.php">Cadastrar Território</a>
                            </div>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Região</a>
                            <div class="dropdown-menu">
                                <a class="nav-link disabled" href="/Roberto/WEB-II---Projeto-Dois/View/ViewConsultaRegiao.php">Consultar Região</a>
                                <a class="nav-link disabled" href="/Roberto/WEB-II---Projeto-Dois/View/ViewManutencaoRegiao.php">Cadastrar Região</a>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </body>
</html>