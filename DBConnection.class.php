<?php

class DBConnection {
    
    private $host = "";
    private $usuario = "";
    private $senha = "";
    private $dbName = "";
    private $atributo = "";
    private $connection = "";
    
    function __construct() {
        $this->setHost("localhost");
        $this->setUsuario("root");
        $this->setSenha("123456");
        $this->setDBName("ldi4");
        $this->setConnection(mysqli_connect($this->getHost(), $this->getUsuario(), $this->getSenha(), $this->getDbName()));
        
        if(!$this->getConnection()){
            die("Erro ao conectar com o Banco de Dados".mysqli_connect_errno());
        }
    }

	public function getHost(){
		return $this->host;
	}

	public function setHost($host){
		$this->host = $host;
	}

	public function getUsuario(){
		return $this->usuario;
	}

	public function setUsuario($usuario){
		$this->usuario = $usuario;
	}

	public function getSenha(){
		return $this->senha;
	}

	public function setSenha($senha){
		$this->senha = $senha;
	}

	public function getDbName(){
		return $this->dbName;
	}

	public function setDbName($dbName){
		$this->dbName = $dbName;
	}


	public function getAtributo(){
		return $this->atributo;
	}

	public function setAtributo($atributo){
		$this->atributo = $atributo;
	}


	public function getConnection(){
		return $this->connection;
	}

	public function setConnection($connection){
		$this->connection = $connection;
	}

}

?>