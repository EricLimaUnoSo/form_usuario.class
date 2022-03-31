<?php 
include_once './DBConnection.class.php';

class Usuario {
    
    private $nome = "";
    private $email = "";
    private $senha = "";
    private $cpf = "";
    private $dtNasc = "";
    private $telefone = "";
    
    function __construct($nome, $email, $senha, $cpf, $dtNasc, $tel) {
        $this->setNome($nome);
        $this->setEmail($email);
        $this->setSenha($senha);
        $this->setCpf($cpf);
        $this->setDtNasc($dtNasc);
        $this->setTelefone($tel);
        $this->save();
    }
    
    public function save(){
        $dbConnection = new DBConnection();
        $dbConnection->getConnection()->query("INSERT INTO usuario (email, senha, nome, cpf, dtNasc, telefone)
            VALUES ('".$this->getEmail()."', '".$this->getSenha()."', '".$this->getNome()."', '".$this->getCpf()."', '".$this->getDtNasc()."', '".$this->getTelefone()."')");
    }

	public function getNome(){
		return $this->nome;
	}

	public function setNome($nome){
		$this->nome = $nome;
	}

	public function getEmail(){
		return $this->email;
	}

	public function setEmail($email){
		$this->email = $email;
	}

	public function getSenha(){
		return $this->senha;
	}

	public function setSenha($senha){
		$this->senha = $senha;
	}

	public function getCpf(){
		return $this->cpf;
	}

	public function setCpf($cpf){
		$this->cpf = $cpf;
	}

	public function getDtNasc(){
		return $this->dtNasc;
	}

	public function setDtNasc($dtNasc){
		$this->dtNasc = $dtNasc;
	}

	public function getTelefone(){
		return $this->telefone;
	}

	public function setTelefone($telefone){
		$this->telefone = $telefone;
	}

	public function getAtivo(){
		return $this->ativo;
	}

	public function setAtivo($ativo){
		$this->ativo = $ativo;
	}

}

?>