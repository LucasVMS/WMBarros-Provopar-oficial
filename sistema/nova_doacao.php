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
                        <h2>Realizar doação</h2>
                        <h5>Aqui você irá realizar suas doações. </h5>

                    </div>
                </div>
                <!-- /. ROW  -->
                <hr />
                <form action="nova_doacao.php" method="post">
                    <div class="panel panel-default">

                        <div class="panel-heading">
                            Dados do doador
                        </div>
                        <div class="panel-body">

                            <div class="form-group col-md-12">
                                <label>Entidade (selecione a entidade caso seja a doadora)</label>
                                <select id="tipo" name="tipo" class="form-control">
                                    <option value="">Selecione seu tipo:</option>
                                </select>
                            </div>
                            <div id="divPF">
                                <center>
                                    <hr>
                               <h4>     <b>Caso seja um doador pessoa física</b></h4>
                                    <hr>
                                </center>
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

                            </div>
                        </div>
                    </div>
                    <div class="panel panel-default">

                        <div class="panel-heading">
                            Dados da doação
                        </div>
                        <div class="panel-body">
                            <div class="form-group col-md-12">
                                <label>Selecione o evento*</label>
                                <select class="form-control" name="evento" id="evento">

                                </select>
                            </div>
                            <div class="form-group col-md-6">
                                <label>Tipo da doação*</label>
                                <select class="form-control" name="tipo" id="tipo">

                                </select>
                            </div>
                            <div class="form-group col-md-6">
                                <label>Quantidade*</label>
                                <input id="qtd" name="qtd" class="form-control" placeholder="Coloque a quantidade da doação" />
                            </div>


                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Observação (opcional)</label>
                                    <textarea name="obs" class="form-control" rows="3"></textarea>
                                </div>
                                <button name="btn_finalizar" type="submit" class="btn btn-success">Finalizar lançamento</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <!-- /. PAGE INNER  -->
        </div>
        <!-- /. PAGE WRAPPER  -->
    </div>

</body>

</html>