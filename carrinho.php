<?php
    class carrinho
    {
        private $itens;
        private $cliente;


        public function __construct($itens, $cliente)
        {
            $this->itens = $itens;
            $this->cliente = $cliente;

        }

        public function listar()
        
        {
            foreach($this->itens as $item)
            {
                echo $item["nome"]."<br>";
            }
        }

        public function  getItens()
        {
            return $this->itens;
        }

        public function  getCliente()
        {
            return $this->cliente;
        }


    }