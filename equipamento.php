<?php
    Class equipamento
    {
        public $ligado;

        function __construct(){
            $this->ligado = false;
        }

        
        public function ligar()
        {
           return $this->ligado = true;
           
        }

        public function desligar()
        {
            return $this->ligado = false;
        }

    }

    
