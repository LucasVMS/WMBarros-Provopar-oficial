<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<?php
include_once '_head.php';
?>

<body>
    <div class="container">
        <div class="row text-center  ">
            <div class="col-md-12">
                <br /><br />

                <h2> Provopar : Login</h2>

                <h5>( Faça seu Login )</h5>
                <br />
            </div>
        </div>
        <div class="row">

            <div class="col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3 col-xs-10 col-xs-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <strong> Preencher todos os campos </strong>
                    </div>
                    <div class="panel-body">

                        <form method="post" action="login.php">
                            <br />
                            <div class="form-group input-group" id="divNome">
                                <span class="input-group-addon">✎</span>
                                <input id="nome" name="nome" type="text" class="form-control" placeholder="Seu nome" />
                            </div>

                            <div class="form-group input-group" id="divEmail">
                                <span class="input-group-addon">@</span>
                                <input id="email" name="email" type="text" class="form-control" placeholder="Seu e-mail" />
                            </div>
                            <div class="form-group input-group" id="divSenha">
                                <span class="input-group-addon"><i class="fa fa-lock"></i></span>
                                <input id="senha" name="senha" type="password" class="form-control" placeholder="Digite sua senha..." />
                            </div>

                            <button type="submit" class="btn btn-success" name="btn_finalizar">Entrar</button>
                            <hr />
                            Não possui cadastro? <a href="cadastro.php">Clique aqui!</a>
                        </form>
                    </div>

                </div>
            </div>


        </div>
    </div>

</body>

</html>