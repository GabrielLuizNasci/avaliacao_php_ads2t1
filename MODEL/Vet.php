<?php 
namespace MODEL;

    class Vet 
    {
        private ?int $idVet;
        private ?string $nome;
        private ?string $sexo;
        private ?int $dataNasc;
        private ?int $cpf;

        public function __construct(){ }

        public function getIdVet(){
            return $this->idVet;
        }

        public function setIdVet(int $idVet){
            $this->idVet = $idVet;
        }

        public function getNome(){
            return $this->nome;
        }

        public function setNome(string $nome){
            $this->nome = $nome;
        }

        public function getSexo(){
            return $this->sexo;
        }

        public function setSexo (string $sexo){
            $this->sexo = $sexo;
        }

        public function getDataNasc(){
            return $this->dataNasc;
        }

        public function setDataNasc(int $dataNasc){
         $this->dataNasc = $dataNasc;
        }

        public function getCpf(){ 
            return $this->cpf;
        }

        public function setCpf (int $cpf){
         $this->cpf = $cpf;
        }

    }

?>