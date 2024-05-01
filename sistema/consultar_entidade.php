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

                        <h2>Consultar Entidades</h2>
                        <h5>Aqui você poderá consultar todas suas entidades. </h5>

                    </div>
                </div>
                <!-- /. ROW  -->
                <hr />
                <div class="row">
                    <div class="col-md-12">
                        <!-- Advanced Tables -->
                        <div class="panel panel-default">

                            <div class="panel-heading">
                                Entidades cadastradas. Caso deseja alterar, ver e adicionar contatos clique no botão equivalente.
                            </div>
                            <div class="panel-body">

                                <form action="consultar_entidade.php" method="post">

                                    <div class="form-group">
                                        <label>Pesquisar pelo nome da entidade</label>
                                        <input name="nome_pesquisar" class="form-control" placeholder="Digite aqui..." id="nome_entidade">
                                    </div>
                                    <center>

                                        <button type="submit" name="btnPesquisar" class="btn btn-info">Pesquisar</button>

                                    </center>
                                </form>

                                <hr>

                                <div class="table-responsive">
                                    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                        <thead>

                                            <tr>
                                                <th>Ação</th>
                                                <th>Entidade</th>
                                                <th>Telefone</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>
                                                    <a href="alterar_entidade.php" class="btn btn-warning btn-xs">Alterar / Detalhes</a>
                                                    <a href="gerenciar_contato.php" class="btn btn-success btn-xs">Contatos</a>
                                                </td>
                                                <td></td>
                                                <td></td>
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