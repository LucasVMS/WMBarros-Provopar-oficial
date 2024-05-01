<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">

<?php
include_once '_head.php'
?>

<body>
    <div id="wrapper">
        <?php
        include_once '_top.php';
        include_once '_menu.php';
        ?>
        <div id="page-wrapper">
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">

                        <h2>Meus Dados</h2>
                        <h5>Nesta página, você poderá alterar seus dados. </h5>

                    </div>
                </div>
                <!-- /. ROW  -->
                <hr />
                <form method="post" action="meus_dados.php">
                    <div class="form-group" id="divNome">
                        <label>Nome</label>
                        <input name="nome" class="form-control" placeholder="Digite seu nome..." id="nome"/>
                    </div>
                    <div class="form-group" id="divEmail">
                        <label>E-mail</label>
                        <input name="email" class="form-control" placeholder="Digite seu e-mail" id="email"/>
                    </div>
                    <button name="btn_gravar" type="submit" class="btn btn-success">Gravar</button>

                </form>
            </div>
            <!-- /. PAGE INNER  -->
        </div>
        <!-- /. PAGE WRAPPER  -->
    </div>

</body>

</html>