<?php
    include '../Controller/controllerEditar.class.php';

    if(empty($_GET['id'])){        
        header("Location: index.php");
        exit;
    }

    $edita  = new EditarController();
    $edita->setterForm();

    $field = $edita->getterForm();
?>

<!DOCTYPE html>
<html>
    <head>        
        <?php include('partials/head.php'); ?>       
    </head>
    <body>
        <?php include('partials/header.php'); ?>
        
        <div class="container grid-lg">
            <h1 class="text-center">Editar Contatos</h1>

            <form class="form-horizontal" method="POST" action="../Controller/ControllerEditar.class.php">
                <input type="hidden" name="id" value="<?php echo $field['getId']; ?>"/>
                <div class="form-group">
                    <div class="col-3 col-sm-12">
                        <label class="form-label">Nome</label>
                    </div>
                    <div class="col-9 col-sm-12">
                        <input class="form-input" type="text" name="nome" required value="<?php echo $field['getNome']; ?>"/>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-3 col-sm-12">
                        <label class="form-label">Sobrenome</label>
                    </div>
                    <div class="col-9 col-sm-12">
                        <input class="form-input" type="text" name="sobrenome" required value="<?php echo $field['getSobrenome'];?>"/>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-3 col-sm-12">
                        <label class="form-label">E-Mail</label>
                    </div>
                    <div class="col-9 col-sm-12">
                    <input class="form-input" type="text" name="email" required value="<?php echo $field['getEmail']; ?>"/>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-3 col-sm-12">
                        <label class="form-label">Telefone</label>
                    </div>
                    <div class="col-9 col-sm-12">
                        <input class="form-input" type="text" name="telefone" required value="<?php echo $field['getTelefone']; ?>"/>                    
                    </div>
                </div>
                    <button type="submit" class="btn btn-primary btn-lg mt-2 text-center">Editar</button>
            </form>
        </div>
    </body>
</html>