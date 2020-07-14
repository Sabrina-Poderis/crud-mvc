<?php
    require_once("../Model/pessoa.class.php");
    class cadastroController{
        private $cadastro;

        public function __construct(){
            $this->cadastro = new Pessoa();
            $this->incluir();
        }

        private function incluir(){ 
            $this->cadastro->setNome($_POST['nome']);
            $this->cadastro->setSobrenome($_POST['sobrenome']);
            $this->cadastro->setEmail($_POST['email']);
            $this->cadastro->setTelefone($_POST['telefone']);
           
            $result = $this->cadastro->incluir();
            if($result >= 1){
                header("Location: ../View/index.php");
            }else{
                echo "<script>alert('Erro ao gravar Pessoa!, verifique se o email dela já foi cadastrada');history.back()</script>";
            }
        }
    }
    new cadastroController();
?>