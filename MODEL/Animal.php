<?php
    namespace MODEL;

    class Animal{
        private ?int $idAnimal;
        private ?string $nome;
        private ?string $especie;
        private ?string $porte;

        public function __construct() { }

        public function getIdAnimal(){
            return $this->idAnimal; 
        }
 
        public function setIdAnimal(int $idAnimal){
           $this->idAnimal = $idAnimal;     
        }

        public function getNome(){
            return $this->nome;       
        }
  
        public function setNome(string $nome){
            $this->nome = $nome; 
        }

        public function getEspecie(){
            return $this->especie;       
        }
  
        public function setEspecie(string $especie){
            $this->especie = $especie; 
        }

        public function getPorte(){
            return $this->porte;       
        }
  
        public function setPorte(string $porte){
            $this->porte = $porte; 
        }
    }

?>