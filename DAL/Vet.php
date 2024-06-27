<?php
    namespace DAL;
    include_once __DIR__ . '/../DAL/conexao.php';
    include_once __DIR__ . 'C:\Users\Rafael\Documents\GitHub\avaliacao_php_ads2t1\MODEL\Vet.php';

    class Vet
    {
        private $conexao;

        public function __construct() {
            $this->conexao = Conexao::conectar();
        }

        public function __destruct() {
            Conexao::desconectar();
        }

        public function Select(){
            $sql = "SELECT * FROM vet;";
            $con = \DAL\Conexao::conectar();
            $registros = $con->query($sql);
            $con = \DAL\Conexao::desconectar();

            foreach ($registros as $linha){
                $veterinario = new \MODEL\Vet();
                $veterinario->setIdDono($linha['idDono']);
                $veterinario->setNome($linha['nome']);
                $veterinario->setSexo($linha['sexo']);
                $veterinario->setDataNasc($linha['dataNasc']);
                $veterinario->setCpf($linha['cpf']);
                $lstVeterinario[] = $veterinario;
            }
            return $lstVeterinario;

        }

        public function SelectById(int $idVet)
        {
            $sql = "Select * from vet where idVet=?;";
            $con = Conexao::conectar();
            $query = $con->prepare($sql);
            $query->execute (array($id));
            $linha = $query->fetch(\PDO::FETCH_ASSOC);
            Conexao::desconectar();

            $veterinario = new \MODEL\Vet();
            $veterinario->setIdVet($linha['idVet']);
            $veterinario->setNome($linha['nome']);
            $veterinario->setSexo($linha['sexo']);
            $veterinario->setDataNasc($linha['dataNasc']);
            $veterinario->setCpf($linha ['cpf']);

            return $veterinario;

        }

        public function Insert(\MODEL\Vet $vet){
            $sql = "INSERT INTO vet (nome, sexo, dataNasc, cpf) VALUES ('{$vet->getNome()}','{$vet->getSexo()}','{$vet->getDataNasc()}','{$vet->getCpf()}');";

            $con = Conexao::conectar();
            $result = $con->query($sql);
            $con = Conexao::desconectar();

            return $result;

        }

        public function Update (\MODEL\Vet $vet)
        {
            $sql = "UPDATE vet SET nome = ?, sexo = ?, dataNasc = ?, cpf = ?, WHERE idVet = ?;";

            $con = Conexao::conectar();
            $query = $con-.prepare($sql);
            $result = $query->execute(array($vet->getNome(), $vet->getSexo(), $vet->getDataNasc(), $vet->getCpf(), $vet->getIdVet()));
            $con = Conexao::desconectar();

            return $result;
        }

        public function Delete($idVet)
        {
            $sql = "delete from vet WHERE idVet = ?;";

            $con = Conexao::conectar();
            $query = $con->prepare($sql);
            $result = $query->execute(array( $idVet ));
            $con = Conexao::desconectar();

            return $result;
        }
    }
?>