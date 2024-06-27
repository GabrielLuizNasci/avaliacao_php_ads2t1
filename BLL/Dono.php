<?php
    namespace BLL;
    require_once __DIR__ . '/../autoload.php';
    include_once __DIR__ . '/../DAL/conexao.php';
    include_once __DIR__ . '/../MODEL/Dono.php';

    use DAL\Dono as DalDono;
    use MODEL\Dono as ModelDono;

    class Dono{
        private $dalDono;

        public function __construct(){
            $this->dalDono = new DalDono();
        }

        public function Select(): array{
            return $this->dalDono->Select();
        }

        public function SelectById(int $id){
            return $this->dalDono->SelectById($id);
        }

        public function Insert(\MODEL\Dono $dono){
            return $this->dalDono->Insert($dono);
        }
        
        public function Update(\MODEL\Dono $dono){
            return $this->dalDono->Update($dono);
        }
        
        public function Delete(int $id){
            return $this->dalDono->Delete($id);
        }
    }
?>