<?php
    namespace DAL;
    require_once __DIR__ . '/../autoload.php';
    include_once __DIR__ . '/../DAL/conexao.php';
    include_once __DIR__ . '/../MODEL/Dono.php';

    use DAL\Conexao;
    use MODEL\Dono as ModelDono;

    class Dono{
        private $conexao;

        public function __construct(){
            $this->conexao = Conexao::conectar();
        }

        public function __destruct(){
            Conexao::desconectar();
        }

        public function Select(){
            $sql = "SELECT * FROM dono;";
            $registros = $this->conexao->query($sql);
            $lstDono = [];

            foreach ($registros as $linha){
                $dono = new \MODEL\Dono();
                $dono->setIdDono($linha['id']);
                $dono->setNome($linha['nome']);
                $dono->setSexo($linha['sexo']);
                $dono->setDataNasc($linha['datanascimento']);
                $dono->setCpf($linha['cpf']);
                $lstDono[] = $dono;
            }
            return $lstDono;

        }

        public function SelectById(int $id){
            $sql = "SELECT * FROM dono WHERE id=?;";
            $query = $this->conexao->prepare($sql);
            $query->execute([$id]);
            $linha = $query->fetch(\PDO::FETCH_ASSOC);

            $dono = new \MODEL\Dono();
            $dono->setIdDono($linha['id']);
            $dono->setNome($linha['nome']);
            $dono->setSexo($linha['sexo']);
            $dono->setDataNasc($linha['dataNasc']);
            $dono->setCpf($linha ['cpf']);

            return $dono;

        }

        public function Insert(ModelDono $dono){
            $sql = "INSERT INTO dono (nome, sexo, dataNasc, cpf) VALUES (?, ?, ?, ?)";

            $result = $this->conexao->prepare($sql);

            return $result->execute([ $dono->getNome(), $dono->getSexo(), $dono->getDataNasc(), $dono->getCpf() ]);

        }

        public function Update(ModelDono $dono){
            $sql = "UPDATE dono SET nome = ?, sexo = ?, dataNAsc = ?, cpf = ?, WHERE id = ?;";

            $query = $this->conexao->prepare($sql);
            $result = $query->execute([$dono->getNome(), $dono->getSexo(), $dono->getDataNasc(), $dono->getCpf(), $dono->getIdDono()]);

            return $result;
        }

        public function Delete($id){
            $sql = "DELETE FROM dono WHERE id = ?;";

            $query = $this->conexao->prepare($sql);
            $result = $query->execute([ $id ]);

            return $result;
        }
    }
?>