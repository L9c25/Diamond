<?php
require "config/connect.php";

// Calculo do aluguel...
// (precoImovel x 0.5) x 0.01 = precoAluguel

class Imovel
{
	private $id;
	private $nome;
	private $pCompra;
	private $pAluguel;
	private $descricao;
	private $area;
	private $img;
	private $disponivel;
	private $qtdQuartos;
	private $qtdBanheiros;
	private $qtdVagas;
	private $fk_Comodidades;
	private $fk_Endereco;
	private $fk_Corretor;
	private $comodidades = []; // Array de comodidades
	private $endereco = []; // Array de endereco
	private $corretor = []; // Array de corretor


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

	public function setPrecoCompra($pCompra)
	{
		$this->pCompra = $pCompra;
		$this->calculaPrecoAluguel();
	}

	public function getPrecoCompra()
	{
		return $this->pCompra;
	}

	public function setPrecoAluguel($pAluguel)
	{
		$this->pAluguel = $pAluguel;
	}

	public function getPrecoAluguel()
	{
		return $this->pAluguel;
	}

	public function setDescricao($descricao)
	{
		$this->descricao = $descricao;
	}

	public function getDescricao()
	{
		return $this->descricao;
	}

	public function setArea($area)
	{
		$this->area = $area;
	}

	public function getArea()
	{
		return $this->area;
	}

	public function setImg($img)
	{
		$this->img = $img;
	}

	public function getImg()
	{
		return $this->img;
	}

	public function setDisponivel($disponivel)
	{
		$this->disponivel = $disponivel;
	}

	public function getDisponivel()
	{
		return $this->disponivel;
	}

	public function setQtdQuartos($qtdQuartos)
	{
		$this->qtdQuartos = $qtdQuartos;
	}

	public function getQtdQuartos()
	{
		return $this->qtdQuartos;
	}

	public function setQtdBanheiros($qtdBanheiros)
	{
		$this->qtdBanheiros = $qtdBanheiros;
	}

	public function getQtdBanheiros()
	{
		return $this->qtdBanheiros;
	}

	public function setQtdVagas($qtdVagas)
	{
		$this->qtdVagas = $qtdVagas;
	}

	public function getQtdVagas()
	{
		return $this->qtdVagas;
	}

	public function setFkComodidades($fk_Comodidades)
	{
		$this->fk_Comodidades = $fk_Comodidades;
	}

	public function getFkComodidades()
	{
		return $this->fk_Comodidades;
	}

	public function setFkEndereco($fk_Endereco)
	{
		$this->fk_Endereco = $fk_Endereco;
	}

	public function getFkEndereco()
	{
		return $this->fk_Endereco;
	}

	public function setFkCorretor($fk_Corretor)
	{
		$this->fk_Corretor = $fk_Corretor;
	}

	public function getFkCorretor()
	{
		return $this->fk_Corretor;
	}

	public function setComodidades(array $comodidades)
	{
		$this->comodidades = $comodidades;
	}

	public function getComodidades()
	{
		return $this->comodidades;
	}

	public function setEndereco(array $endereco)
	{
		$this->endereco = $endereco;
	}

	public function getEndereco()
	{
		return $this->endereco;
	}

	public function setCorretor(array $corretor)
	{
		$this->corretor = $corretor;
	}

	public function getCorretor()
	{
		return $this->corretor;
	}

	private function calculaPrecoAluguel()
	{
		$this->pAluguel = ($this->pCompra * 0.5) * 0.01;
	}
}

interface ImDAO
{
	public function listar();
}