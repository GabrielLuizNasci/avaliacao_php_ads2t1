<?php
    namespace DAL;
    include_once 'C:\Users\Rafael\Documents\GitHub\avaliacao_php_ads2t1\DAL\conexao.php';
    include_once 'C:\Users\Rafael\Documents\GitHub\avaliacao_php_ads2t1\MODEL\Dono.php';

    class Dono{
        private $conexao;

        public function __construct() {
            $this->conexao = Conexao::conectar();
        }

        public function __destruct() {
            Conexao::desconectar();
        }

        public function Select(){
            $sql = "SELECT * FROM dono;";
            $con = \DAL\Conexao::conectar();
            $registros = $con->query($sql);
            $con = \DAL\Conexao::desconectar();

            foreach ($registros as $linha){
                $tutor = new \MODEL\Dono();
                $tutor->setIdDono($linha['idDono']);
                $tutor->setNome($linha['nome']);
                $tutor->setSexo($linha['sexo']);
                $tutor->setDataNasc($linha['dataNasc']);
                $tutor->setCpf($linha['cpf']);
                $lstTutor[] = $tutor;
            }
            return $lstTutor;

        }

        public function SelectById(int $idDono)
        {
            $sql = "Select * from dono where idDono=?;";
            $con = Conexao::conectar();
            $query = $con->prepare($sql);
            $query->execute (array($id));
            $linha = $query->fetch(\PDO::FETCH_ASSOC);
            Conexao::desconectar();

            $tutor = new \MODEL\Dono();
            $tutor->setIdDono($linha['idDono']);
            $tutor->setNome($linha['nome']);
            $tutor->setSexo($linha['sexo']);
            $tutor->setDataNasc($linha['dataNasc']);
            $tutor->setCpf($linha ['cpf']);

            return $tutor;

        }

        public function Insert(\MODEL\Dono $dono){
            $sql = "INSERT INTO dono (nome, sexo, dataNasc, cpf) VALUES ('{$dono->getNome()}','{$dono->getSexo()}','{$dono->getDataNasc()}','{$dono->getCpf()}');";

            $con = Conexao::conectar();
            $result = $con->query($sql);
            $con = Conexao::desconectar();

            return $result;

        }

        public function Update (\MODEL\Dono $dono)
        {
            $sql = "UPDATE dono SET nome = ?, sexo = ?, dataNasc = ?, cpf = ?, WHERE idDono = ?;";

            $con = Conexao::conectar();
            $query = $con-.prepare($sql);
            $result = $query->execute(array($dono->getNome(), $dono->getSexo(), $dono->getDataNasc(), $dono->getCpf(), $dono->getIdDono()));
            $con = Conexao::desconectar();

            return $result;
        }

        public function Delete($idDono)
        {
            $sql = "delete from dono WHERE idDono = ?;";

            $con = Conexao::conectar();
            $query = $con->prepare($sql);
            $result = $query->execute(array( $idDono ));
            $con = Conexao::desconectar();

            return $result;
        }
    }
?>