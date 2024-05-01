<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">

<?php
include_once '_head.php'
?>

<body>
    <div id="wrapper">
        <?php
        include_once '_top.php';
        include_once '_menu.php'
        ?>
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper">
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">

                        <h2>Gerenciar cargos</h2>
                        <h5>Aqui você poderá gerenciar todos os cargos dos contatos. </h5>

                    </div>
                </div>
                <!-- /. ROW  -->
                <hr />
                <div class="row">
                    <div class="col-md-12">
                        <!-- Advanced Tables -->
                        <div class="panel panel-default">

                            <div class="panel-heading">
                                Cadastre o novo registro
                            </div>
                            <div class="panel-body">

                                <form action="gerenciar_tipo_doacao.php" method="post">

                                    <div class="form-group">
                                        <label>Escreva o nome do cargo</label>
                                        <input name="cargo" class="form-control" placeholder="Digite aqui. Exemplo: Secretária" id="cargo">
                                    </div>
                                    <center>

                                        <button type="submit" name="btnPesquisar" class="btn btn-success">Cadastrar</button>

                                    </center>
                                </form>

                                <hr>



                            </div>
                        </div>
                        <div class="panel panel-default">

                            <div class="panel-heading">
                               Cargos cadastrados
                            </div>
                            <div class="panel-body">

                                <div class="table-responsive">
                                    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                        <thead>

                                            <tr>
                                                <th>Ação</th>
                                                <th>Cargo</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>
                                                    <a href="#" class="btn btn-warning btn-xs">Alterar</a>
                                                    <a href="#" class="btn btn-danger btn-xs">Excluir</a>
                                                </td>
                                                <td>
                                                    (nome)
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>



                            </div>
                        </div>
                        <!--End Advanced Tables -->
                    </div>
                </div>
            </div>
            <!-- /. PAGE INNER  -->
        </div>
        <!-- /. PAGE WRAPPER  -->
    </div>

</body>

</html>