<?php 
namespace MODEL;

    class Servico
    {
        private ?int $id;
        private ?string $nome;
        private ?string $descricao;
        private ?float $valor;
        private ?int $duracao;
        private ?int $IdDono;
        private ?int $IdAnimal;

        public function __construct()
        {
        }

        public function getId()
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

        public function setNome(int $nome)
        {
            $this->id = $nome;
        }

        public function getDescricao()
        {
            return $this->descricao;
        }

        public function setDescricao(string $descricao)
        {
            $this->descricao = $descricao;
        }

        public function getValor()
        {
         return $this->valor;
        }

        public function setValor (string $valor)
        {
         $this->valor = $valor;
        }

        public function getDuracao()
        {
            return $this->duracao;
        }

        public function setDuracao(int $duracao)
        {
          $this->duracao = $duracao;
        }

        public function getIdDono()
        {
            return $this->idDono;
        }

        public function setIdDono(int $idDono)
        {
            $this->idDono = $idDono;
        }

        public function getIdAnimal()
        {
            return $this->IdAnimal;
        }

        public function setIdAnimal()
        {
            $this->idAnimal = $IdAnimal;
        }
    }

?>