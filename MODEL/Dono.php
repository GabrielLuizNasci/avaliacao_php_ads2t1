<?php 
namespace MODEL;

    class Dono 
    {
        private ?int $id;
        private ?string $nome;
        private ?string $sexo;
        private ?int $dataNasc;
        private ?int $cpf;

        public function __construct()
        {
        }

        public function getID()
        {
            return $this->id;
        }

        public function setId(int $id)
        {
            $this->id = $id;
        }

        public function getNome()
        {
            return $this->nome;
        }

        public function setNome(string $nome)
        {
            $this->nome = $nome;
        }

        public function getSexo()
        {
            return $this->sexo;
        }

        public function setSexo (string $sexo)
        {
            $this->sexo = $sexo;
        }

        public function getDataNasc()
        {
            return $this->dataNasc;
        }

        public function setDataNasc(int $dataNasc)
        {
         $this->dataNasc = $dataNasc;
        }

        public function getCpf ()
        {
            return $this->cpf;
        }

        public function setCpf (int $cpf)
        {
         $this->cpf = $cpf;
        }

    }

?>