<?php
    class Fornecedor{
        public function __construct(private string $razaoSocial = '', private string $nome_fantasia = '', private string $cnpj = '', private string $telefone = '', private array $produto = array()){}

        public function getRazao(){
            return $this -> razaoSocial;
        }

        public function getNomeFantasia(){
            return $this -> nome_fantasia;
        }

        public function getCnpj(){
            return $this -> cnpj;
        }

        public function getTelefone(){
            return $this -> telefone;
        }

        public function getProduto(){
            return $this -> produto;
        }

        public function setProduto(Produto $produto){
            $this -> produto[] = $produto;
        }
    }
?>