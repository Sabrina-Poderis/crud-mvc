<?php
    require_once("../Controller/controller.class.php");
    class DeletarController {
        private $deleta;

        public function __construct($id){
            $this->deleta = new Controller();
            $this->deleta->deletar($id);
            
            header("Location: ../View/index.php");        
        }
    }
    new DeletarController($_GET['id']);
?>