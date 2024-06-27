<?php
    namespace BLL;
    include_once 'D:\xampp\htdocs\avaliacao_php_ads2t1\DAL\Animal.php';
    use DAL;

    class Animal{
        public function Select(){
            $dalAnimal = new \Dal\Animal();
            return $dalAnimal->Select();
        }

        public function SelectById(int $id){
            $dalAnimal = new \DAL\Animal();
            return $dalAnimal->SelectById($id);
        }

        public function Insert(\MODEL\Animal $animal){
            $dalAnimal = new \DAL\Animal();
            return $dalAnimal->Insert($animal);
        }
        
        public function Update(\MODEL\Animal $animal){
            $dalAnimal = new \DAL\Animal();
            return $dalAnimal->Update($animal);
        } 
        
        public function Delete(int $id){
            $dalAnml = new \DAL\Animal();
            return $dalAnml->Delete($id);
        }
        
    }
?>