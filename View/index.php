<?php
require_once("../controller/ControllerListar.class.php");
$controller = new Controller();
?>

<!DOCTYPE html>
<html>
    <head>        
        <?php include('partials/head.php'); ?>
    </head>

    <body>
        <?php include('partials/header.php'); ?>

        <div class="container grid-lg">
            <div class="columns">
                <table class="table table-striped table-hover">
                    <thead>
                        <tr>       
                            <th>#</th>        
                            <th>NOME</th>
                            <th>SOBRENOME</th>
                            <th>E-MAIL</th>
                            <th>TELEFONE</th>
                            <th>EDITAR</th>
                            <th>EXCLUIR</th>
                        </tr>
                    </thead>
                    <?php new listarController(); ?>
                </table>
            </div>
        </div>
    </body>
</html>