<?php

    class produto
    
    {
        private $nomeProduto;
        private $valor;
        private $frete;
        private $quantidade;


        public function __construct($nomeProduto, $valor, $frete, $quantidade)
        {
            $this->produto = $nomeProduto;
            $this->valor = $valor;
            $this->frete = $frete;
            $this->quantidade = $quantidade;
           
        }

        public function  getNomeProduto()
        {
            return $this->nomeProduto;
        }

    public function  getValor()
        {
            return $this->valor;
        }

        public function  getFrete()
        {
            return $this->frete;
        }

    public function  getQuantidade()
        {
            return $this->quantidade;
        }

    }