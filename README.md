# CRUD MVC
> Um CRUD simples, desenvolvido com PHP, utilizando o padrão de projeto MVC

![crud-mvc](https://user-images.githubusercontent.com/54513989/87372080-139e6700-c55d-11ea-87e8-e9b02eeecbd2.png)
Este CRUD foi criado apenas para fins de aprendizado e portanto os dados aqui apresentados foram gerados artificialmente.


## Requisitos
[XAMPP](https://www.apachefriends.org/pt_br/index.html)

## Configuração para Desenvolvimento

* Banco de Dados:
  * Criar um banco de dados no [phpMyAdmin](http://localhost/phpmyadmin/)
  * Importar arquivo *crud.sql*
  * Alterar o construtor no arquivo *controller.class.php*
  ```sh
    public function __construct(){
          $this->pdo = new PDO("mysql:dbname=<nome_db>;host=localhost", "root", "");        
    }
  ```
* Aplicação:
  * Salvar o projeto no diretório "C:\xampp\htdocs\xampp"
  * Acessar em seu navegador a URL "http://localhost/xampp/meumvc/View/index.php"


## Meta

Sabrina Poderis – sabrina.poderis@gmail.com
