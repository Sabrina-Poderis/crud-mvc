<?php
    require_once("../Controller/controller.class.php");
    require_once("../Model/pessoa.class.php");

    class EditarController {
        private $edita;
        private $pessoa;
        private $id;

        public function __construct(){        
            $this->edita  = new Controller();
            $this->pessoa = new Pessoa();
            
            if(!empty($_POST['id'])) {
                $this->alterar();
            }
        }

        private function alterar(){
            $this->pessoa->setId($_POST['id']);
            $this->pessoa->setNome($_POST['nome']);
            $this->pessoa->setSobrenome($_POST['sobrenome']);
            $this->pessoa->setEmail($_POST['email']);
            $this->pessoa->setTelefone($_POST['telefone']);

            $result = $this->pessoa->edita();

            if($result){                
                header("Location: ../View/index.php");
            }else{
                echo "<script>alert('Erro ao editar: ".$result."');history.back()</script>";
            }
        }

        // Pega os dados da pessoa sendo editada pelo id, e seta as informações
        public function setterForm(){
            $this->id = $_GET['id'];
            $info     = $this->edita->getInfo($this->id);
            
            $this->pessoa->setId($this->id);
            $this->pessoa->setNome($info['nome']);
            $this->pessoa->setSobrenome($info['sobrenome']);
            $this->pessoa->setEmail($info['email']);
            $this->pessoa->setTelefone($info['telefone']);
        }

        // Retorna informações do usuário no formato de array
        public function getterForm(){
            return array (
                'getId'        => $this->pessoa->getId(),
                'getNome'      => $this->pessoa->getNome(),
                'getSobrenome' => $this->pessoa->getSobrenome(),
                'getEmail'     => $this->pessoa->getEmail(),
                'getTelefone'  => $this->pessoa->getTelefone(),
            );
        }
    }
    new EditarController();
?>