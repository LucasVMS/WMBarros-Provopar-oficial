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

                        <h2>Consultar Eventos</h2>
                        <h5>Aqui você poderá consultar todos seus eventos. </h5>

                    </div>
                </div>
                <!-- /. ROW  -->
                <hr />
                <div class="row">
                    <div class="col-md-12">
                        <!-- Advanced Tables -->
                        <div class="panel panel-default">

                            <div class="panel-heading">
                                Eventos cadastrados. Caso deseja alterar, clique no botão.
                            </div>
                            <div class="panel-body">

                                <form action="consultar_evento.php" method="post">

                                    <div class="form-group">
                                        <label>Pesquisar pelo nome do evento</label>
                                        <input name="nome_pesquisar" class="form-control" placeholder="Digite aqui..." id="nome_evento">
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
                                                <th>Nome do evento</th>
                                                <th>Ação</th>
                                            </tr>
                                        </thead>
                                        <tbody>

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