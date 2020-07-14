<!DOCTYPE html>
<html>
    <head>        
        <?php include('partials/head.php'); ?>            
    </head>
    <body>          
        <?php include('partials/header.php'); ?>
        <div class="container grid-lg">
            <h1 class="text-center">Cadastrar Contatos</h1>

            <form class="form-horizontal" method="POST" action="../Controller/ControllerCadastro.class.php">
                <div class="form-group">
                    <div class="col-3 col-sm-12">
                        <label class="form-label">Nome</label>
                    </div>
                    <div class="col-9 col-sm-12">
                        <input class="form-input" type="text" name="nome" placeholder="Nome">
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-3 col-sm-12">
                        <label class="form-label">Sobrenome</label>
                    </div>
                    <div class="col-9 col-sm-12">
                        <input class="form-input" type="text" name="sobrenome" placeholder="Sobrenome">
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-3 col-sm-12">
                        <label class="form-label">E-Mail</label>
                    </div>
                    <div class="col-9 col-sm-12">
                        <input class="form-input" type="text" name="email" placeholder="exemplo@exemplo.com">
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-3 col-sm-12">
                        <label class="form-label">Telefone</label>
                    </div>
                    <div class="col-9 col-sm-12">
                        <input class="form-input" type="tel" name='telefone' placeholder="(12) 1234-5679">                    
                    </div>
                </div>
                    <button type="submit" class="btn btn-primary btn-lg mt-2 text-center">Cadastrar</button>
            </form>
        </div>
    </body>
</html>