<?php
class Controller {
    private $pdo;   

    public function __construct(){
        $this->pdo = new PDO("mysql:dbname=crud;host=localhost", "root", "");        
    }

    public function getInfo($id){
        $sql = "SELECT * FROM pessoa WHERE id = :id";
        $sql = $this->pdo->prepare($sql);            
        $sql->bindValue(':id', $id);
        $sql->execute();

        if($sql->rowCount() > 0){
            return $sql->fetch();
        } else {
            return array();
        }
    }

    public function getAll(){
        $sql = "SELECT * FROM pessoa";
        $sql = $this->pdo->query($sql);

        if($sql->rowCount() > 0){
            return $sql->fetchAll();
        } else {
            return array();
        }
    }

    public function cadastrar($nome, $sobrenome, $email, $telefone){        
        if(!$this->existeEmail($email, $id=false)){
            $sql = "INSERT INTO pessoa (nome, sobrenome, email, telefone) VALUES (:nome, :sobrenome, :email, :telefone)";
            $sql = $this->pdo->prepare($sql);
            $sql->bindValue(':nome', $nome);
            $sql->bindValue(':sobrenome', $sobrenome);
            $sql->bindValue(':email', $email);
            $sql->bindValue(':telefone', $telefone);
            $sql->execute();
            return true;
        } else {
            return false;
        }
    }

    public function editar($id, $nome, $sobrenome, $email, $telefone){
        if(!$this->existeEmail($email, $id)){      
            $sql = "UPDATE pessoa SET nome = :nome, sobrenome = :sobrenome, email = :email, telefone = :telefone WHERE id = :id";
            $sql = $this->pdo->prepare($sql);            
            $sql->bindValue(':id', $id);
            $sql->bindValue(':nome', $nome);
            $sql->bindValue(':sobrenome', $sobrenome);
            $sql->bindValue(':email', $email);
            $sql->bindValue(':telefone', $telefone);
            $sql->execute();
            return true;
        } else {
            return false;   
        }
    }

    public function deletar($id){      
        $sql = "DELETE FROM pessoa WHERE id = :id";
        $sql = $this->pdo->prepare($sql);           
        $sql->bindValue(':id', $id);
        $sql->execute();
    }

    private function existeEmail($email, $id){
        $sql = "SELECT * FROM pessoa WHERE email = :email";

        if($id){
            // verifica o email de todos que não sejam a pessoa sendo editada
            $sql .= " AND id != :id";
            $sql = $this->pdo->prepare($sql);       
            $sql->bindValue(':email', $email);
            $sql->bindValue(':id', $id);
        } else {
            // verifica o email de todos
            $sql = $this->pdo->prepare($sql);       
            $sql->bindValue(':email', $email);
        }
    
        $sql->execute();

        if($sql->rowCount() > 0){            
            return true;
        } else {
            return false;
        }
    }
}
?>