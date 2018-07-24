<?php

    class cartao
    
    {
        private $numero;
        private $codigo;
        private $data;
        private $titular;


        public function __construct($numero, $codigo, $data, $titular)
        {
            $this->numero = $numero;
            $this->codigo = $codigo;
            $this->data = $data;
            $this->titular = $titular;
        }
           
        public function  getNumero()
            {
                return $this->Numero;
            }
    
        public function  getCodigo()
            {
                return $this->Codigo;
            }

            public function  getData()
            {
                return $this->Data;
            }
    
        public function  getTitular()
            {
                return $this->titular;
            }
        
            
            
                    

        


    }