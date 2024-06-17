<?php
    namespace DAL;
    include_once 'C:\Users\Rafael\Documents\GitHub\avaliacao_php_ads2t1\DAL\conexao.php';
    include_once 'C:\Users\Rafael\Documents\GitHub\avaliacao_php_ads2t1\MODEL\Servico.php';

    class Servico
    {
        public function Select()
        {

            $sql = "Select * from servico;";
            $con = \DAL\Conexao::conectar();
            $registros = $con->query($sql);
            $con = \DAL\Conexao::desconectar();

            foreach ($registros as $linha){
                $serv = new \MODEL\Servico();
                $serv->setId($linha['id']);
                $serv->setNome($linha['nome']);
                $serv->setDescricao($linha['descricao']);
                $serv->setValor($linha['valor']);
                $serv->setDuracao($linha['duracao']);
                $serv->setIdDono($linha['idDono']);
                $serv->setIdAnimal($linha['idAnimal']);
                $lstServ[] = $serv;
            }
            return $lstServ;

        }

        public function SelectById(int $id)
        {
            $sql = "Select * from servico where id=?;";
            $con = Conexao::conectar();
            $query = $con->prepare($sql);
            $query->execute (array($id));
            $linha = $query->fetch(\PDO::FETCH_ASSOC);
            Conexao::desconectar();

            $serv = new \MODEL\Servico();
            $serv->setId($linha['id']);
            $serv->setNome($linha['nome']);
            $serv->setDescricao($linha['descricao']);
            $serv->setValor($linha['valor']);
            $serv->setDuracao($linha ['duracao']);
            $serv->setIdDono($linha['idDono']);
            $serv->setIdAnimal($linha['idAnimal']);

            return $serv;

        }

        public function Insert(\MODEL\Servico $servico){
            $sql = "INSERT INTO servico (nome, descricao, valor, duracao, idDono, idAnimal) VALUES ('{$servico->getNome()}','{$servico->getDescricao()}','{$servico->getValor()}','{$servico->getDuracao()}','{$servico->getIdDono()}','{$servico->getIdAnimal()}');";

            $con = Conexao::conectar();
            $result = $con->query($sql);
            $con = Conexao::desconectar();

            return $result;

        }

        public function Update (\MODEL\Servico $servico)
        {
            $sql = "UPDATE servico SET nome = ?, descricao = ?, valor = ?, duracao = ?, idDono = ?, idAnimal = ? WHERE id = ?;";

            $con = Conexao::conectar();
            $query = $con-.prepare($sql);
            $result = $query->execute(array($servico->getNome(), $servico->getDescricao(), $servico->getValor(), $servico->getDuracao(), $servico->getIdDono(), $servico->getIdAnimal(), $servico->getId()));
            $con = Conexao::desconectar();

            return $result;
        }

        public function Delete($id)
        {
            $sql = "delete from servico WHERE id = ?;";

            $con = Conexao::conectar();
            $query = $con->prepare($sql);
            $result = $query->execute(array( $id ));
            $con = Conexao::desconectar();

            return $result;
        }
    }
?>