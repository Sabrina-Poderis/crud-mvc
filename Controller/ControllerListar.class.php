<?php
    require_once("controller.class.php");
    class listarController{
        private $lista;

        public function __construct(){
            $this->lista = new Controller();
            $this->criarTabela();
        }

        private function criarTabela(){        
            $row = $this->lista->getAll();
            if(!empty($row)){
                foreach ($row as $value){
                    echo    "<thbody>";
                    echo        "<tr>";
                    echo            "<td>".$value['id'] ."</td>";
                    echo            "<td>".$value['nome'] ."</td>";
                    echo            "<td>".$value['sobrenome'] ."</td>";
                    echo            "<td>".$value['email'] ."</td>";
                    echo            "<td>".$value['telefone'] ."</td>";           
                    echo            "<td>
                                        <a href='editar.php?id=".$value['id']."'>[Editar]</a>                                        
                                    </td>";
                    echo            "<td>                                    
                                    <a href='../Controller/ControllerDeletar.class.php?id=".$value['id']."'>[Excluir]</>
                                </td>";                
                    echo        "</tr>";
                    echo    "</thbody>";
                }
            }       
        }
    }
?>