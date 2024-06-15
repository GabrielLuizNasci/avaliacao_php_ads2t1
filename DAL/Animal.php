<?php
    namespace DAL;
    include_once 'C:\Users\Rafael\Documents\GitHub\avaliacao_php_ads2t1\DAL\conexao.php';
    include_once 'C:\Users\Rafael\Documents\GitHub\avaliacao_php_ads2t1\MODEL\Animal.php';

    class Animal 
    {
        public function Select()
        {

            $sql = "Select * from animal;";
            $con = \DAL\Conexao::conectar();
            $registros = $con->query($sql);
            $con = \DAL\Conexao::desconectar();

            foreach ($registros as $linha){
                $anml = new \MODEL\Animal();
                $anml->setId($linha['id']);
                $anml->setNome($linha['nome']);
                $anml->setEspecie($linha['especie']);
                $anml->setPorte($linha['porte']);
                $lstAnml[] = $anml;
            }
            return $lstAnml;

        }

        public function SelectById(int $id)
        {
            $sql = "Select * from animal where id=?;";
            $con = Conexao::conectar();
            $query = $con->prepare($sql);
            $query->execute (array($id));
            $linha = $query->fetch(\PDO::FETCH_ASSOC);
            Conexao::desconectar();

            $anml = new \MODEL\Animal();
            $anml->setId($linha['id']);
            $anml->setNome($linha['nome']);
            $anml->setEspecie($linha['especie']);
            $anml->setPorte($linha['porte']);

            return $anml;

        }

        public function Insert(\MODEL\Animal $animal){
            $sql = "INSERT INTO animal (nome, especie, porte) VALUES ('{$animal->getNome()}','{$animal->getEspecie()}','{$animal->getPorte()}');";

            $con = Conexao::conectar();
            $result = $con->query($sql);
            $con = Conexao::desconectar();

            return $result;

        }

        public function Update (\MODEL\Animal $animal)
        {
            $sql = "UPDATE animal SET nome = ?, especie = ?, porte =? WHERE id = ?;";

            $con = Conexao::conectar();
            $query = $con-.prepare($sql);
            $result = $query->execute(array($animal->getNome(), $animal->getEspecie(), $animal->getPorte, $animal->getId()));
            $con = Conexao::desconectar();

            return $result;
        }

        public function Delete($id)
        {
            $sql = "delete from animal WHERE id = ?;";

            $con = Conexao::conectar();
            $query = $con->prepare($sql);
            $result = $query->execute(array( $id ));
            $con = Conexao::desconectar();

            return $result;
        }
    }