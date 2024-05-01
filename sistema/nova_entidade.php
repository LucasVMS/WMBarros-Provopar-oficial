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

                        <h2>Nova Entidade</h2>
                        <h5>Aqui você poderá cadastrar todas suas entidades. </h5>

                    </div>
                </div>
                <!-- /. ROW  -->
                <hr />
                <form action="nova_entidade.php" method="post">
                    <div class="panel panel-default">

                        <div class="panel-heading">
                            Dados cadastrais
                        </div>
                        <div class="panel-body">

                            <div class="form-group col-md-6">
                                <label>CNPJ</label>
                                <input name="nome_entidade" class="form-control" placeholder="Digite o CNPJ da entidade." maxlength="18" id="nome_entidade" />
                            </div>

                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Razão social</label>
                                    <input name="razao_social" class="form-control" placeholder="Digite a razão social da entidade." maxlength="50" id="razao_social" />
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Nome fantasia</label>
                                    <input name="nome_fantasia" class="form-control" placeholder="Digite o nome da entidade." maxlength="35" id="nome_fantasia" />
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Telefone fixo</label>
                                    <input name="tel_fixo" class="form-control" placeholder="Digite o telefone da entidade." maxlength="14" id="tel_fixo" />
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>E-mail</label>
                                    <input name="email_entidade" class="form-control" placeholder="Digite o e-mail da entidade." maxlength="50" id="email_entidade" />
                                </div>
                            </div>



                        </div>
                    </div>
                    <div class="panel panel-default">

                        <div class="panel-heading">
                            Dados do endereço
                        </div>
                        <div class="panel-body">


                            <div class="form-group col-md-6">
                                <label>CEP</label>
                                <input name="cep" class="form-control" placeholder="Digite o CEP" id="cep" />
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Rua</label>
                                    <input name="rua" class="form-control" placeholder="Digite o nome da rua e número" maxlength="45" id="rua" />
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Bairro</label>
                                    <input name="bairro" class="form-control" placeholder="Digite o nome do bairro" maxlength="45" id="bairro" />
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Estado</label>
                                    <input name="estado" class="form-control" readonly placeholder="Digite o CEP primeiro" maxlength="2" id="estado" />
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Cidade</label>
                                    <input name="cidade" readonly class="form-control" placeholder="Digite o CEP primeiro" maxlength="45" id="cidade" />
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Telefone fixo</label>
                                    <input name="tel_fixo" class="form-control" placeholder="Digite o telefone da entidade." maxlength="14" id="tel_fixo" />
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Complemento</label>
                                    <input name="complemento" class="form-control" placeholder="Digite o e-mail da entidade." maxlength="100" id="complemento" />
                                </div>
                            </div>

                            <div class="col-md-12">
                                <center>
                                    <button name="btnGravar" type="submit" class="btn btn-success">Cadastrar</button>
                                </center>
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