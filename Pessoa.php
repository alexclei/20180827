<?php 
/**
* 
*/
class Pessoa
{
	protected $nome;

	public function setNome($nome)
	{
		$this->nome = $nome;
	}
	public function comer()
	{
		echo "\nComendo\n";
	}
}
