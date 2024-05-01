<?php

require_once '../DAO/UtilDAO.php';
require_once '../DAO/TipoDAO.php';

$objdao = new TipoDAO();

if (isset($_POST['btnGravar'])) {

    $tipo = $_POST['nome'];
    $ret = $objdao->CadastrarTipo($tipo);
} else if (isset($_POST['btnExcluir'])) {
    $id = $_POST['id_excluir'];
    $ret = $objdao->ExcluirTipoDoacao($id);
}else if(isset($_POST['btnAlterar'])){
    $id = $_POST['id_alterar'];
    $tipo = $_POST['tipo_alterar'];
    $ret = $objdao->AlterarTipoDoacao($tipo, $id);
}

$tipos = $objdao->ConsultarTipo();

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
                        <h2>Gerenciar tipos de doações</h2>
                        <h5>Aqui você poderá gerenciar todos os tipos de doações. </h5>

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

                                    <div class="form-group" id="divTipo">
                                        <label>Escreva o tipo de doação</label>
                                        <input name="nome" class="form-control" placeholder="Digite aqui. Exemplo: Roupa" id="nome">
                                    </div>
                                    <center>

                                        <button type="submit" onclick="return ValidarTipoDoacao('nome', 'divTipo')" name="btnGravar" class="btn btn-success">Cadastrar</button>

                                    </center>
                                </form>

                                <hr>



                            </div>
                        </div>
                        <div class="panel panel-default">

                            <div class="panel-heading">
                                Tipos de doações cadastrados
                            </div>
                            <div class="panel-body">

                                <div class="table-responsive">
                                    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                        <thead>

                                            <tr>
                                                <th>Ação</th>
                                                <th>Tipo</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            for ($i = 0; $i < count($tipos); $i++) {
                                            ?>
                                                <tr>
                                                    <td>

                                                        <button type="button" data-toggle="modal" data-target="#modalAlterar<?= $i ?>" class="btn btn-warning btn-xs">Alterar</button>
                                                        <button type="button" data-toggle="modal" data-target="#modalExcluir<?= $i ?>" class="btn btn-danger btn-xs">Excluir</button>
                                                        <!-- MODAL EXCLUIR -->
                                                        <div class="modal fade" id="modalExcluir<?= $i ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                                            <div class="modal-dialog">
                                                                <div class="modal-content">
                                                                    <div class="modal-header">
                                                                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                                                        <h4 class="modal-title" id="myModalLabel">Confirmação de exclusão</h4>
                                                                    </div>
                                                                    <form action="gerenciar_tipo_doacao.php" method="post">
                                                                        <div class="modal-body">
                                                                            Deseja excluir o tipo: <b><?= $tipos[$i]['nome'] ?> ?</b>
                                                                            <input type="hidden" name="id_excluir" value="<?= $tipos[$i]['id'] ?>">
                                                                        </div>
                                                                        <div class="modal-footer">
                                                                            <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
                                                                            <button class="btn btn-primary" name="btnExcluir">Confirmar</button>
                                                                        </div>
                                                                    </form>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!-- MODAL ALTERAR -->
                                                        <div class="modal fade" id="modalAlterar<?= $i ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                                            <div class="modal-dialog">
                                                                <div class="modal-content">
                                                                    <div class="modal-header">
                                                                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                                                        <h4 class="modal-title" id="myModalLabel">Alterar Tipo</h4>
                                                                    </div>
                                                                    <form action="gerenciar_tipo_doacao.php" method="post">
                                                                        <div class="modal-body">

                                                                            <div class="form-group" id="divTipo<?= $i ?>">
                                                                                <label>Tipo de doação</label>
                                                                                <input name="tipo_alterar" value="<?= $tipos[$i]['nome'] ?>" class="form-control" placeholder="Digite aqui. Exemplo: Roupa" id="tipo_alterar<?= $i ?>">
                                                                            </div>

                                                                           
                                                                            <input type="hidden" name="id_alterar" value="<?= $tipos[$i]['id'] ?>">
                                                                        </div>
                                                                        <div class="modal-footer">
                                                                            <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
                                                                            <button class="btn btn-primary" name="btnAlterar" onclick="return ValidarTipoDoacao('tipo_alterar<?= $i ?>', 'divTipo<?= $i ?>')">Salvar</button>
                                                                        </div>
                                                                    </form>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <?= $tipos[$i]['nome'] ?>
                                                    </td>
                                                </tr>
                                            <?php } ?>
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