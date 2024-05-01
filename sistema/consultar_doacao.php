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

        <!-- /. NAV TOP  -->

        <!-- /. NAV SIDE  -->
        <div id="page-wrapper">
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">

                        <h2>Consultar Doação</h2>
                        <h5>Consulte todas as doações em um determinado período. </h5>
                    </div>
                </div>
                <!-- /. ROW  -->
                <hr />
                <form action="consultar_doacao.php" method="post">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label>Tipo de doação*</label>
                            <select class="form-control" name="tipo">
                                <option value="0">Todos</option>
                                <option value="1">Entrada</option>
                                <option value="2">Saída</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group" id="divDataFinal">
                            <label>Evento*</label>
                            <div class="form-group">

                                <select class="form-control" name="evento">
                                    <option value="">Pesquise/Selecione</option>

                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Usuário</label>
                            <select class="form-control" name="usuario">
                                <option value="0">Selecione</option>
                                
                            </select>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Entidade</label>
                            <select class="form-control" name="entidade">
                                <option value="0">Selecione</option>
                                
                            </select>
                        </div>
                    </div>
                    <center>
                        <button class="btn btn-info" name="btnPesquisar"> Pesquisar </button>
                    </center>
                </form>
                <hr>
            </div>
            <!-- /. PAGE INNER  -->
        </div>
        <!-- /. PAGE WRAPPER  -->
    </div>
    <!-- /. WRAPPER  -->

</body>

</html>