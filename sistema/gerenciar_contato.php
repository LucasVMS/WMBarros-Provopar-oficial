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

                        <h2>Gerenciar contatos</h2>
                        <h5>Aqui você poderá gerenciar todos os contatos da entidade selecionada. </h5>

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

                                <div class="form-group col-md-12">
                                    <label>Entidade selecionada</label>
                                    <input disabled class="form-control" value="NOME DA ENTIDADE SELECIONADA NA TELA ANTERIOR">
                                </div>
                                <form action="gerenciar_tipo_doacao.php" method="post">
                                    <input type="hidden" name="id_entidade" value="">
                                    <div class="form-group col-md-6" id="divTipo">
                                        <label>Tipo de usuário*</label>

                                        <select id="tipo" name="tipo" class="form-control">
                                            <option value="">Selecione seu tipo:</option>
                                            <option value="1">Responsável</option>
                                            <option value="2">Presidente</option>
                                            <option value="3">Referência</option>

                                        </select>

                                    </div>
                                    <div class="form-group col-md-6" id="divTipo">
                                        <label>Selecione o cargo</label>

                                        <select id="cargo" name="cargo" class="form-control">
                                            <option value="">Selecione seu tipo:</option>
                                            <option value="1">Responsável</option>
                                            <option value="2">Presidente</option>
                                            <option value="3">Referência</option>

                                        </select>

                                    </div>


                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Nome*</label>
                                            <input name="nome" class="form-control" placeholder="Digite o nome do usuário." maxlength="50" id="nome" />
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>CPF</label>
                                            <input name="cpf_usuario" class="form-control" placeholder="Digite o CPF do usuário." maxlength="14" id="cpf_usuario" />
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Telefone Celular</label>
                                            <input name="tel_usuario" class="form-control" placeholder="Digite o telefone do usuário." maxlength="14" id="tel_usuario" />
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Telefone fixo</label>
                                            <input name="tel_usuario" class="form-control" placeholder="Digite o telefone do usuário." maxlength="14" id="tel_usuario" />
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label>E-mail</label>
                                            <input name="email" class="form-control" placeholder="Digite o e-mail do usuário." maxlength="50" id="email" />
                                        </div>
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
                               Contatos cadastrados
                            </div>
                            <div class="panel-body">

                                <div class="table-responsive">
                                    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                        <thead>

                                            <tr>
                                                <th>Ação</th>
                                                <th>Nome</th>
                                                <th>Tipo</th>
                                                <th>CPF</th>
                                                <th>Tel</th>
                                                <th>E-mail</th>
                                                <th>Cargo</th>
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
                                                    (Tipo)
                                                </td>
                                                <td>
                                                    (CPF)
                                                </td>
                                                <td>
                                                    (Tel)
                                                </td>
                                                <td>
                                                    (E-mail)
                                                </td>
                                                <td>
                                                    (Cargo)
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