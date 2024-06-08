<?php 
namespace MODEL;

    class Servico
    {
        private ?int $id;
        private ?string $descricao;
        private ?float $valor;
        private ?int $duracao;

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

    }

?>