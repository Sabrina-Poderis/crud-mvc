<?php
require_once("../Controller/controller.class.php");

class Pessoa extends Controller {
    private $id;
    private $nome;
    private $sobrenome;
    private $email;
    private $telefone;
     
    //Setters
    public function setId($string){
        $this->id = $string;
    }
    public function setNome($string){
        $this->nome = $string;
    }
    public function setSobrenome($string){
        $this->sobrenome = $string;
    }
    
    public function setEmail($string){
        $this->email = $string;
    }

    public function setTelefone($string){
        $this->telefone = $string;
    }
   
    //Getters
    public function getId(){
        return $this->id;
    }
    public function getNome(){
        return $this->nome;
    }
    public function getSobrenome(){
        return $this->sobrenome;
    }
    public function getEmail(){
        return $this->email;
    }
    public function getTelefone(){
        return $this->telefone;
    }

    public function incluir(){
        return $this->cadastrar(
            $this->getNome(),
            $this->getSobrenome(),
            $this->getEmail(),
            $this->getTelefone()
        );
    }

    public function edita(){
        return $this->editar(
            $this->getId(),
            $this->getNome(),
            $this->getSobrenome(),
            $this->getEmail(),
            $this->getTelefone()
        );
    }
}
