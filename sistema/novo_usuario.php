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

                        <h2>Novo Usuário</h2>
                        <h5>Aqui você irá cadastrar todos seus usuários. </h5>

                    </div>
                </div>
                <!-- /. ROW  -->
                <hr />
                <form action="novo_usuario.php" method="post">

                    <div class="form-group col-md-12" id="divTipo">
                    <label>Tipo de usuário*</label>
                        <div class="form-group input-group">
                            <span class="input-group-addon">⚙</span>
                            <select id="tipo" name="tipo" class="form-control">
                                <option value="">Selecione seu tipo:</option>
                                <option value="1">1 - Responsável</option>
                                <option value="2">2 - Presidente</option>
                                <option value="3">3 - Referência</option>
                                <option value="4">4 - Doador</option>

                            </select>
                        </div>
                    </div>


                    <div class="col-md-12">
                        <div class="form-group">
                            <label>Nome*</label>
                            <input name="nome" class="form-control" placeholder="Digite o nome do usuário." maxlength="50" id="nome" />
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <label>CPF</label>
                            <input name="cpf_usuario" class="form-control" placeholder="Digite o CPF do usuário." maxlength="14" id="cpf_usuario" />
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <label>Telefone</label>
                            <input name="tel_usuario" class="form-control" placeholder="Digite o telefone do usuário." maxlength="14" id="tel_usuario" />
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <label>E-mail</label>
                            <input name="email" class="form-control" placeholder="Digite o e-mail do usuário." maxlength="50" id="email" />
                        </div>
                    </div>
                    <div class="col-md-12">
                        <button name="btnGravar" type="submit" class="btn btn-success">Cadastrar</button>
                    </div>
                </form>
            </div>
            <!-- /. PAGE INNER  -->
        </div>
        <!-- /. PAGE WRAPPER  -->
    </div>

</body>

</html>