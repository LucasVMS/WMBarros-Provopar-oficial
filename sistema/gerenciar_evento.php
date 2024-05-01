<?php
require_once '../DAO/UtilDAO.php';
//UtilDAO::VerificarLogado();
require_once '../DAO/EventoDAO.php';

if (isset($_POST['btnGravar'])) {
    $nome_evento = $_POST['nome_evento'];
    $data_inicio = $_POST['data_inicio'];
    $hora_inicio = $_POST['hora_inicio'];
    $data_fim = $_POST['data_fim'];
    $hora_fim = $_POST['hora_fim'];
    $obs = $_POST['obs'];
    $objdao = new EventoDAO();
    // OBS ENTRA NESSA PARTE?????????
    $ret = $objdao->CadastrarEvento($nome_evento, $data_inicio, $hora_inicio, $data_fim, $hora_fim, $obs);
}

?>
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
                        <?php include_once '_msg.php' ?>
                        <h2>Gerenciar Eventos</h2>
                        <h5>Aqui você poderá gerenciar todos seus eventos. </h5>

                    </div>
                </div>
                <!-- /. ROW  -->
                <hr />
                <div class="panel panel-default">

                    <div class="panel-heading">
                        Cadastre um novo evento
                    </div>
                    <div class="panel-body">
                        <form action="gerenciar_evento.php" method="post">

                            <div class="form-group col-md-12" id="divEvento">
                                <label>Nome do evento*</label>
                                <input name="nome_evento" class="form-control" placeholder="Digite o nome do evento." maxlength="100" id="nome_evento" />
                            </div>

                            <div class="col-md-6">
                                <div class="form-group" id="divData_inicio">
                                    <label>Data inicial*</label>
                                    <input type="date" name="data_inicio" class="form-control" placeholder="Digite a data de início do evento." maxlength="35" id="data_inicio" />
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group" id="divHora_inicio">
                                    <label>Horário inicial*</label>
                                    <input name="hora_inicio" class="form-control" placeholder="Digite a hora do início do evento." maxlength="5" id="hora_inicio" />
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group" id="divData_fim">
                                    <label>Data final*</label>
                                    <input type="date" name="data_fim" class="form-control" placeholder="Digite a data de fim do evento." maxlength="35" id="data_fim" />
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group" id="divHora_fim">
                                    <label>Horário final*</label>
                                    <input name="hora_fim" class="form-control" placeholder="Digite a hora do fim do evento." maxlength="5" id="hora_fim" />
                                </div>
                            </div>
                            <div class="form-group col-md-12">
                                <label>Observação (opcional)</label>
                                <textarea name="obs" class="form-control" rows="3"></textarea>
                            </div>
                            <div class="col-md-12">
                                <center>
                                    <button name="btnGravar" type="submit" onclick="return ValidarEvento()" class="btn btn-success">Cadastrar</button>
                                </center>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="panel panel-default">

                    <div class="panel-heading">
                        Eventos cadastrados
                    </div>
                    <div class="panel-body">

                        <div class="table-responsive">
                            <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                <thead>

                                    <tr>
                                        <th>Ação</th>
                                        <th>Nome</th>
                                        <th>Inicio</th>
                                        <th>Fim</th>
                                        <th>Obs</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>
                                            <a href="#" class="btn btn-warning btn-xs">Editar / Excluir</a>
                                        </td>
                                        <td>
                                            (nome)
                                        </td>
                                        <td>
                                            (Data inicial e hora inicial)
                                        </td>
                                        <td>
                                            (Data final e hora final)
                                        </td>
                                        <td>
                                            (Obs)
                                        </td>

                                    </tr>
                                </tbody>
                            </table>
                        </div>



                    </div>
                </div>
            </div>
            <!-- /. PAGE INNER  -->
        </div>
        <!-- /. PAGE WRAPPER  -->
    </div>

</body>

</html>