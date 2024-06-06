<?php

require "./models/imovelModel.php";
require_once "./config/connect.php";
class daoMysql implements ImDAO
{
	private $pdo;
	public function __construct(PDO $drive)
	{
		$this->pdo = $drive;
	}


	//! Listar os imoveis ↓↓↓
	public function listar(string $id = null, bool $disponibilidade = null, string $like = null)
	{
		// $id -> Aplica o filtro de ID na query
		// $disponibilidade Aplica o filtro de disponibilidade na query

		$lista = [];
		$query = "SELECT
		-- Imovel
		i.id, i.nome, i.pCompra as 'p/compra', i.descricao, i.img, i.disponibilidade,
		i.area, i.qtd_quartos, i.qtd_banheiros, i.qtd_vagasEst, i.fk_comodidades, i.fk_corretor, i.fk_endereco,
		-- Endereço
		en.bairro, en.numero, en.rua, ci.planet, ci.cod,
		-- Corretor
		cr.name, cr.phone,
		-- Comodidades
		cd.academia, cd.arealazer, cd.piscina, cd.banheira, cd.varanda, cd.estacionamento
		FROM imovel i
		JOIN comodidades cd on i.fk_comodidades = cd.id
		JOIN corretores cr on i.fk_corretor = cr.id
		JOIN endereco en on i.fk_endereco = en.id
		JOIN ciep ci on en.ciep = ci.id ";

		 $conditions = [];
    if ($id != null) {
        $conditions[] = "i.id = :id";
    }
    if (isset($disponibilidade)) {
        $conditions[] = "i.disponibilidade = :disponibilidade";
    }
    if ($like != null) {
        $conditions[] = "i.nome LIKE :like";
    }

    if (count($conditions) > 0) {
        $query .= "WHERE " . implode(' AND ', $conditions);
    }

    $stmt = $this->pdo->prepare($query);

    if ($id != null) {
        $stmt->bindParam(':id', $id);
    }
    if (isset($disponibilidade)) {
        $stmt->bindParam(':disponibilidade', $disponibilidade, PDO::PARAM_BOOL);
    }
    if ($like != null) {
        $likeParam = "%" . $like . "%";
        $stmt->bindParam(':like', $likeParam);
    }


		$stmt->execute();

		if ($stmt->rowCount() > 0) {
			$dados = $stmt->fetchAll();

			foreach ($dados as $item) {
				$p = new Imovel();

				$comodidades = array(
					'piscina' => $item['piscina'],
					'areaLazer' => $item['arealazer'],
					'varanda' => $item['varanda'],
					'academia' => $item['academia'],
					'estacionamento' => $item['estacionamento'],
					'banheira' => $item['banheira']
				);
				$endereco = array(
					'bairro' => $item['bairro'],
					'numero' => $item['numero'],
					'rua' => $item['rua'],
					'planeta' => $item['planet'],
					'cod' => $item['cod'],
				);

				$corretor = array(
					'nome' => $item['name'],
					'phone' => $item['phone']
				);

				$p->setId($item['id']);
				$p->setNome($item['nome']);
				$p->setPrecoCompra($item['p/compra']);
				$p->setDescricao($item['descricao']);
				$p->setImg($item['img']);
				$p->setDisponivel($item['disponibilidade']);
				$p->setArea($item['area']);
				$p->setQtdQuartos($item['qtd_quartos']);
				$p->setQtdBanheiros($item['qtd_banheiros']);
				$p->setQtdVagas($item['qtd_vagasEst']);
				$p->setEndereco($endereco);
				$p->setComodidades($comodidades);
				$p->setCorretor($corretor);

				$p->setFkComodidades($item['fk_comodidades']);
				$p->setFkCorretor($item['fk_corretor']);
				$p->setFkEndereco($item['fk_endereco']);

				$lista[] = $p;
			}
		}
		return $lista;
	}


	//! Criar o Imovel ↓↓↓
	public function criarImovel(object $i = null)
	{
		// FK_endereco => var fk_endereco
		// FK_comodidades => var fk_comodidades


		$this->pdo->beginTransaction();
		try {

			//?-> Insere o endereço
			$endereco = $i->getEndereco();
			$ciep = $i->getFkEndereco();
			$stmt = $this->pdo->prepare("INSERT INTO endereco (id, bairro, numero, rua, ciep) 
										VALUES (null, :bairro, :rua, :numero, :ciep)");

			$stmt->bindParam(':bairro', $endereco['bairro'], PDO::PARAM_STR);
			$stmt->bindParam(':numero', $endereco['numero'], PDO::PARAM_STR);
			$stmt->bindParam(':rua', $endereco['rua'], PDO::PARAM_STR);
			$stmt->bindParam(':ciep', $ciep, PDO::PARAM_INT);
			$stmt->execute();
			//TODO Pega o ID do endereço que acabou de ser inserido
			$FK_endereco = $this->pdo->lastInsertId();


			//?-> Insere as comodidades
			$c = $i->getComodidades();
			$piscina = $c['piscina'];
			$alazer = $c['arealazer'];
			$varanda = $c['varanda'];
			$banheira = $c['banheira'];
			$academia = $c['academia'];
			$est = $c['estacionamento'];

			$stmt = $this->pdo->prepare("INSERT INTO comodidades (id, piscina, arealazer, varanda, banheira, academia, estacionamento) VALUES (null, :piscina, :arealazer, :varanda, :banheira, :academia, :estacionamento)");

			$stmt->bindParam(':piscina', $piscina, PDO::PARAM_INT);
			$stmt->bindParam(':arealazer', $alazer, PDO::PARAM_INT);
			$stmt->bindParam(':varanda', $varanda, PDO::PARAM_INT);
			$stmt->bindParam(':banheira', $banheira, PDO::PARAM_INT);
			$stmt->bindParam(':academia', $academia, PDO::PARAM_INT);
			$stmt->bindParam(':estacionamento', $est, PDO::PARAM_INT);

			$stmt->execute();

			//TODO Pega o ID da comodidade que acabou de ser inserida
			$FK_comodidades = $this->pdo->lastInsertId();

			//?-> INSERE O IMOVEL

			$nome = $i->getNome();
			$pCompra = $i->getPrecoCompra();
			$desc = $i->getDescricao();
			$img = $i->getImg();
			$disponibilidade = $i->getDisponivel();
			$area = $i->getArea();
			$qtd_quartos = $i->getQtdQuartos();
			$qtd_banheiros = $i->getQtdBanheiros();
			$qtd_vagasEst = $i->getQtdVagas();
			// deve vir de um form select...
			$fk_corretor = $i->getFkCorretor();

			$stmt = $this->pdo->prepare("INSERT INTO imovel VALUES (null, :nome, :pCompra, :desc, :img, :disponibilidade, :area, :qtd_quartos, :qtd_banheiros, :qtd_vagasEst, :fk_comodidades, :fk_endereco, :fk_corretor)");

			$stmt->bindParam(':nome', $nome, PDO::PARAM_STR);
			$stmt->bindParam(':pCompra', $pCompra, PDO::PARAM_STR);
			$stmt->bindParam(':desc', $desc, PDO::PARAM_STR);
			$stmt->bindParam(':img', $img, PDO::PARAM_STR);
			$stmt->bindParam(':disponibilidade', $disponibilidade, PDO::PARAM_BOOL);
			$stmt->bindParam(':area', $area);
			$stmt->bindParam(':qtd_quartos', $qtd_quartos, PDO::PARAM_INT);
			$stmt->bindParam(':qtd_banheiros', $qtd_banheiros, PDO::PARAM_INT);
			$stmt->bindParam(':qtd_vagasEst', $qtd_vagasEst, PDO::PARAM_INT);
			$stmt->bindParam(':fk_comodidades', $FK_comodidades, PDO::PARAM_INT);
			$stmt->bindParam(':fk_endereco', $FK_endereco, PDO::PARAM_INT);
			$stmt->bindParam(':fk_corretor', $fk_corretor, PDO::PARAM_INT);

			$stmt->execute();

			//? Commita as operações caso ambas sejam bem-sucedidas
			$this->pdo->commit();
			return true;
		} catch (Exception $e) {
			// Rollback nas operações em caso de erro
			$this->pdo->rollBack();
			echo $e;
			return false;
		}
	}

	//! Deletar um imovel ↓↓↓
	public function deletImovel($id_a, $img)
	{
		$stmt = $this->pdo->prepare("SELECT disponibilidade FROM imovel WHERE id = :id_a");
		$stmt->bindParam(':id_a', $id_a, PDO::PARAM_INT);
		$stmt->execute();
		$result = $stmt->fetch(); // Usando fetch() pois esperamos apenas um registro

		// Verifica se o imovel está disponível: se tiver ele pode ser deletado...
		if ($result["disponibilidade"] == 1) {
			try {
				// Selecionando as Foreign Keys
				$stmt = $this->pdo->prepare("SELECT fk_comodidades, fk_endereco FROM imovel WHERE id = :id_a");
				$stmt->bindParam(':id_a', $id_a, PDO::PARAM_INT);
				$stmt->execute();
				$result = $stmt->fetchAll();
				$fk_comodidade = $result[0]['fk_comodidades'];
				$fk_endereco = $result[0]['fk_endereco'];

				// Deletar o endereço do imóvel:
				$stmt = $this->pdo->prepare("DELETE FROM endereco WHERE id = :fk_endereco");
				$stmt->bindParam(':fk_endereco', $fk_endereco, PDO::PARAM_INT);
				$stmt->execute();

				// Deletar a comodidade do imóvel:
				$stmt = $this->pdo->prepare("DELETE FROM comodidades WHERE id = :fk_comodidade");
				$stmt->bindParam(':fk_comodidade', $fk_comodidade, PDO::PARAM_INT);
				$stmt->execute();

				// Deletar o imóvel
				$stmt = $this->pdo->prepare("DELETE FROM imovel WHERE id = :id_a");
				$stmt->bindParam(':id_a', $id_a, PDO::PARAM_INT);
				$stmt->execute();

				$pasta = "./assets/img/imovel/";
				unlink($pasta . $img); // Deleta a imgaem do serividor
				return true;
			} catch (Exception $e) {
				return false;
			}
		} else {
			return false;
		}
	}

	//! Atualiza um imovel ↓↓↓
	public function updateImovel(object $i = null)
	{
		// Inicia uma transação
		$this->pdo->beginTransaction();
		try {
			// Atualiza o endereço
			$endereco = $i->getEndereco();
			$fk_endereco = $i->getFkEndereco();
			$stmt = $this->pdo->prepare("UPDATE endereco SET bairro = :bairro, numero = :numero, rua = :rua, ciep = :ciep WHERE id = :id");
			$stmt->bindParam(':bairro', $endereco['bairro'], PDO::PARAM_STR);
			$stmt->bindParam(':numero', $endereco['numero'], PDO::PARAM_STR);
			$stmt->bindParam(':rua', $endereco['rua'], PDO::PARAM_STR);
			$stmt->bindParam(':ciep', $endereco['ciep'], PDO::PARAM_INT);
			$stmt->bindParam(':id', $fk_endereco, PDO::PARAM_INT);

			if (!$stmt->execute()) {
				throw new Exception("Erro ao atualizar o endereço: " . implode(", ", $stmt->errorInfo()));
			}

			// Atualiza as comodidades
			$comodidades = $i->getComodidades();
			$fk_comodidades = $i->getFkComodidades();
			$stmt = $this->pdo->prepare("UPDATE comodidades SET piscina = :piscina, arealazer = :arealazer, varanda = :varanda, banheira = :banheira, academia = :academia, estacionamento = :estacionamento WHERE id = :id");
			$stmt->bindParam(':piscina', $comodidades['piscina'], PDO::PARAM_INT);
			$stmt->bindParam(':arealazer', $comodidades['arealazer'], PDO::PARAM_INT);
			$stmt->bindParam(':varanda', $comodidades['varanda'], PDO::PARAM_INT);
			$stmt->bindParam(':banheira', $comodidades['banheira'], PDO::PARAM_INT);
			$stmt->bindParam(':academia', $comodidades['academia'], PDO::PARAM_INT);
			$stmt->bindParam(':estacionamento', $comodidades['estacionamento'], PDO::PARAM_INT);
			$stmt->bindParam(':id', $fk_comodidades, PDO::PARAM_INT);

			if (!$stmt->execute()) {
				throw new Exception("Erro ao atualizar as comodidades: " . implode(", ", $stmt->errorInfo()));
			}

			// Atualiza o imóvel
			$id = $i->getId();
			$nome = $i->getNome();
			$pCompra = $i->getPrecoCompra();
			$desc = $i->getDescricao();
			$img = $i->getImg();
			$disponibilidade = $i->getDisponivel();
			$area = $i->getArea();
			$qtd_quartos = $i->getQtdQuartos();
			$qtd_banheiros = $i->getQtdBanheiros();
			$qtd_vagasEst = $i->getQtdVagas();
			$fk_corretor = $i->getFkCorretor();

			$stmt = $this->pdo->prepare("UPDATE imovel SET nome = :nome, pCompra = :pCompra, descricao = :desc, img = :img, disponibilidade = :disponibilidade, area = :area, qtd_quartos = :qtd_quartos, qtd_banheiros = :qtd_banheiros, qtd_vagasEst = :qtd_vagasEst, fk_corretor = :fk_corretor WHERE id = :id");
			$stmt->bindParam(':id', $id, PDO::PARAM_INT);
			$stmt->bindParam(':nome', $nome, PDO::PARAM_STR);
			$stmt->bindParam(':pCompra', $pCompra, PDO::PARAM_STR);
			$stmt->bindParam(':desc', $desc, PDO::PARAM_STR);
			$stmt->bindParam(':img', $img, PDO::PARAM_STR);
			$stmt->bindParam(':disponibilidade', $disponibilidade, PDO::PARAM_BOOL);
			$stmt->bindParam(':area', $area);
			$stmt->bindParam(':qtd_quartos', $qtd_quartos, PDO::PARAM_INT);
			$stmt->bindParam(':qtd_banheiros', $qtd_banheiros, PDO::PARAM_INT);
			$stmt->bindParam(':qtd_vagasEst', $qtd_vagasEst, PDO::PARAM_INT);
			$stmt->bindParam(':fk_corretor', $fk_corretor, PDO::PARAM_INT);

			if (!$stmt->execute()) {
				throw new Exception("Erro ao atualizar o imóvel: " . implode(", ", $stmt->errorInfo()));
			}

			// Se tudo estiver correto, commita a transação
			$this->pdo->commit();
			return true;
		} catch (Exception $e) {
			// Se houver algum erro, faz rollback
			$this->pdo->rollBack();
			error_log($e->getMessage()); // Log de erros
			return false;
		}
	}



	//TODOS Ver a imagem do imovel
	public function viewImg(int $id = null)
	{
		$sql = "SELECT img FROM imovel where id = $id";
		$stmt = $this->pdo->prepare($sql);
		$stmt->execute();
		$resp = $stmt->fetchAll();
		return $resp[0]["img"];
	}

	//TODOS Ver os Cieps cadastrados
	public function viewCiep()
	{
		$sql = "SELECT * FROM ciep";
		$stmt = $this->pdo->prepare($sql);
		$stmt->execute();
		$resp = $stmt->fetchAll();
		return $resp;
	}


	//TODOS Ver os Corretores cadastrados
	public function viewCorretor()
	{
		$sql = "SELECT * FROM corretores";
		$stmt = $this->pdo->prepare($sql);
		$stmt->execute();
		$resp = $stmt->fetchAll();
		return $resp;
	}





	public function criarReserva($id_a, $id_u, $chek_in, $chek_out, $adult, $kid)
	{
		// query
		$sql = "SELECT id_u FROM reserva WHERE (id_u = $id_u)";
		// preparando a query
		$stmt = $this->pdo->prepare($sql);
		// executando a query
		$stmt->execute();

		if ($stmt->rowCount() >= 1) {
			// O usuario ja possui reserva
			header('Content-Type: application/json');
			$response = ['success' => false];
			echo json_encode($response);
			return false;
		} else {
		}

		$sql = "INSERT INTO reserva (id_a, id_u, chek_in, chek_out, pessoas, criancas, data) VALUES (:id_a, :id_u, :chek_in, :chek_out, :adult, :kid, :data);";



		try {
			$stmt = $this->pdo->prepare($sql);

			// Definir parâmetros
			date_default_timezone_set('America/Sao_Paulo');
			$param_data = date("Y-m-d H:i:s");
			$chek_in_string = $chek_in->format('Y-m-d H:i:s'); // Converte para string
			$chek_out_string = $chek_out->format('Y-m-d H:i:s'); // Converte para string

			// Vincule as variáveis à instrução preparada como parâmetros
			$stmt->bindParam(":id_a", $id_a, PDO::PARAM_INT);
			$stmt->bindParam(":id_u", $id_u, PDO::PARAM_INT);
			$stmt->bindParam(":chek_in", $chek_in_string, PDO::PARAM_STR);
			$stmt->bindParam(":chek_out", $chek_out_string, PDO::PARAM_STR);
			$stmt->bindParam(":adult", $adult, PDO::PARAM_INT);
			$stmt->bindParam(":kid", $kid, PDO::PARAM_INT);
			$stmt->bindParam(":data", $param_data, PDO::PARAM_STR);

			// executando a query.
			if ($stmt->execute()) {
			} else {
				// mensagem caso um erro ocorra.
				echo "Ops! Algo deu errado. Por favor, tente novamente mais tarde.";
			}
		} catch (PDOException $e) {
			die("Erro na operação: " . $e->getMessage());
		} finally {
			unset($stmt); // Libera a variável $stmt
		}

		try {
			// removendo a disponibilidade da acomodação
			$sql = "UPDATE acomodacao SET disponivel = 1 WHERE (id = $id_a);";

			$stmt = $this->pdo->prepare($sql);

			// executando a query.
			if ($stmt->execute()) {
			} else {
				// mensagem caso um erro ocorra.
				echo "Ops! Algo deu errado. Por favor, tente novamente mais tarde.";
			}
		} catch (PDOException $e) {
			die("Erro na operação: " . $e->getMessage());
		} finally {
			unset($stmt); // Libera a variável $stmt
		}
	}

	public function verifyReserva($id_u)
	{
		// query
		$sql = "SELECT id_u FROM reserva WHERE (id_u = $id_u)";
		// preparando a query
		$stmt = $this->pdo->prepare($sql);
		// executando a query
		$stmt->execute();

		if ($stmt->rowCount() >= 1) {
			// O usuario ja possui reserva
			$sql = $this->pdo->query("SELECT r.id_a ,r.chek_in, r.chek_out, a.nome, a.preco, DATEDIFF(r.chek_out, r.chek_in) AS 	intervalo,
				DATEDIFF(r.chek_out, r.chek_in) * a.preco AS total_preco, i.d0 AS img
				FROM reserva r
				JOIN acomodacao a ON r.id_a = a.id
				JOIN imagens i ON a.fk_img = i.id
				WHERE id_u = $id_u");


			if ($sql->rowCount() >= 1) {
				// O usuario ja possui reserva
				$dados = $sql->fetchAll();
				foreach ($dados as $item) {
					$lista = [
						'status' => 'success',
						'id' => $item['id_a'],
						'nome' => $item['nome'],
						'preco' => $item['preco'],
						'intervalo' => $item['intervalo'],
						'total_preco' => $item['total_preco'],
						'chek_in' => $item['chek_in'],
						'chek_out' => $item['chek_out'],
						'img' => $item['img'],
					];
				}
				return $lista;
			} else {
				// O usuario ñ possui reserva
				$lista = [
					'status' => 'error',
				];
				return $lista;
			}
		} else {
			$lista = [
				'status' => 'error',
			];
			return $lista;
		}

	}

	public function deletReserva($id_a)
	{
		// Inicia uma transação
		$this->pdo->beginTransaction();
		try {
			// Deleta a reserva
			$stmt = $this->pdo->prepare("DELETE FROM reserva WHERE id_a = :id_a");
			$stmt->bindParam(':id_a', $id_a, PDO::PARAM_INT);
			$stmt->execute();

			// Atualiza a disponibilidade na pousada
			$stmt = $this->pdo->prepare("UPDATE acomodacao SET disponivel = '0' WHERE id = :id_a");
			$stmt->bindParam(':id_a', $id_a, PDO::PARAM_INT);
			$stmt->execute();

			// Commita as operações caso ambas sejam bem-sucedidas
			$this->pdo->commit();
			return true;
		} catch (Exception $e) {
			// Rollback nas operações em caso de erro
			$this->pdo->rollBack();
			return false;
		}
	}

	public function updateReserva($id, $nome, $desc, $preco)
	{
		$this->pdo->beginTransaction();
		try {
			// Atualiza a Acomodação
			$stmt = $this->pdo->prepare("UPDATE acomodacao SET nome = :nome, preco = :preco, descricao = :descr WHERE id = $id");
			$stmt->bindParam(':nome', $nome, PDO::PARAM_STR);
			$stmt->bindParam(':descr', $desc, PDO::PARAM_STR);
			$stmt->bindParam(':preco', $preco, PDO::PARAM_INT);
			$stmt->execute();

			// Atualiza a imagem da pousada
			// $stmt = $this->pdo->prepare("UPDATE acomodacao SET disponivel = '0' WHERE id = :id_a");
			// $stmt->bindParam(':id_a', $id_a, PDO::PARAM_INT);
			// $stmt->execute();

			// Commita as operações caso ambas sejam bem-sucedidas
			$this->pdo->commit();
			return true;
		} catch (Exception $e) {
			// Rollback nas operações em caso de erro
			$this->pdo->rollBack();
			return false;
		}
	}

	public function deletAcomodacao($id_a, $img)
	{
		try {
			// Deletar img
			$stmt = $this->pdo->prepare("DELETE FROM imagens WHERE d0 = :nome");
			$stmt->bindParam(':nome', $img, PDO::PARAM_INT);
			$stmt->execute();

			// Deletar acomodaçao
			$stmt = $this->pdo->prepare("DELETE FROM acomodacao WHERE id = :id_a");
			$stmt->bindParam(':id_a', $id_a, PDO::PARAM_INT);
			$stmt->execute();

			$pasta = "./assets/img/ap/";
			unlink($pasta . $img);
			return true;
		} catch (Exception $e) {
			return false;
		}
	}
}



// Funçao que calcula o valor total da estadia
function calc($intervalo, $p_noite)
{
	// Definindo as Variaveis
	$ValBase = $p_noite * $intervalo;

	// Formatando o valor da estadia
	$valorEstadia = number_format($ValBase, 2, ",", ".");

	// retornando o valor da estadia
	return $valorEstadia;
}