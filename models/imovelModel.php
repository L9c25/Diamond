<?php
require "config/connect.php";

// Calculo do aluguel...
// (precoImovel x 0.5) x 0.01 = precoAluguel

class Apt
{
	private $id;
	private $nome;
	private $precoCompra;
	private $descricao;
	private $disponivel;
	private $img;

	public function setId($id)
	{
		$this->id = $id;
	}

	public function getId()
	{
		return $this->id;
	}

	public function setNome($nome)
	{
		$this->nome = $nome;
	}

	public function getNome()
	{
		return $this->nome;
	}

	public function setPreco($precoCompra)
	{
		$this->precoCompra = $precoCompra;
	}

	public function getPreco()
	{
		return $this->precoCompra;
	}

	public function setDescricao($descricao)
	{
		$this->descricao = $descricao;
	}

	public function getDescricao()
	{
		return $this->descricao;
	}

	public function setDisponivel($disponivel)
	{
		$this->disponivel = $disponivel;
	}

	public function getDisponivel()
	{
		return $this->disponivel;
	}

	public function setImg1($img)
	{
		$this->img = $img;
	}

	public function getImg1()
	{
		return $this->img;
	}
}

interface ImDAO
{
	public function listar();
}